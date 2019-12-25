<template>
    <v-container>
        <v-row>
            <v-col cols="12">
                <v-card>
                    <form>
                        <v-row>
                            <v-col cols="9" align="center" justify="center">
                                <v-card-subtitle>Habit Name</v-card-subtitle>
                                <v-card-text>
                                    <div class="display-1 font-weight-thick">毎日本を読む</div>
                                </v-card-text>
                                <v-chip
                                        class="ma-2"
                                        color="green"
                                        text-color="white"
                                >
                                    Best Record
                                </v-chip>
                                <v-card-text class="display-1">
                                    {{ hours }} :
                                    {{ minutes | zeroPad }} :
                                    {{ seconds | zeroPad }} :
                                    {{ milliSeconds | zeroPad(3) }}
                                </v-card-text>
                            </v-col>
                            <v-col cols="3" justify="center" align-self="center">
                                <v-btn
                                        class="mx-1"
                                        fab
                                        dark
                                        large
                                        color="red"
                                        @click="stopTimer"
                                        v-show="isRunning"
                                >
                                    <v-icon dark large>mdi-stop-circle-outline</v-icon>
                                </v-btn>
                                <v-btn
                                        class="mx-1"
                                        fab
                                        dark
                                        large
                                        color="cyan"
                                        @click="startTimer"
                                        v-show="!isRunning"
                                >
                                    <v-icon dark large>mdi-play-circle-outline</v-icon>
                                </v-btn>
                            </v-col>
                        </v-row>
                    </form>
                </v-card>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols="12">
                <v-card>
                    <form>
                        <v-row justify="center">
                            <v-col cols="9" align="center" justify="center">
                                <v-card-subtitle>Habit Name</v-card-subtitle>
                                <v-card-text>
                                    <v-text-field
                                            label="Input Habit Name"
                                    >
                                    </v-text-field>
                                </v-card-text>
                            </v-col>
                            <v-col cols="3" justify="center" align-self="center">
                                <v-btn class="mx-1" fab dark large color="cyan" @click="startTimer">
                                    <v-icon dark large>mdi-play-circle-outline</v-icon>
                                </v-btn>
                                <v-card-text>start</v-card-text>
                                <v-btn
                                        absolute
                                        dark
                                        fab
                                        bottom
                                        right
                                        color="pink"
                                >
                                    <v-icon>mdi-plus</v-icon>
                                </v-btn>
                            </v-col>
                        </v-row>
                    </form>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default{
    data(){
        return {
            times: [],
            animateFrame: 0,
            nowTime: 0,
            diffTime: 0,
            startTime: 0,
            isRunning: false
        }
    },
    methods: {
        // 現在時刻から引数に渡した数値を startTime に代入
        setSubtractStartTime: function (time) {
            var time = typeof time !== 'undefined' ? time : 0;
            this.startTime = Math.floor(performance.now() - time);
        },
        // タイマーをスタートさせる
        startTimer: function () {
            // loop()内で this の値が変更されるので退避
            var vm = this;
            vm.setSubtractStartTime(vm.diffTime);
            // ループ処理
            (function loop(){
                vm.nowTime = Math.floor(performance.now());
                vm.diffTime = vm.nowTime - vm.startTime;
                vm.animateFrame = requestAnimationFrame(loop);
            }());
            vm.isRunning = true;
        },
        // タイマーを停止させる
        stopTimer: function () {
            this.isRunning = false;
            cancelAnimationFrame(this.animateFrame);
        },
        // 計測中の時間を配列に追加
        pushTime: function () {
            this.times.push({
                hours: this.hours,
                minutes: this.minutes,
                seconds: this.seconds,
                milliSeconds: this.milliSeconds
            });
        },
        // 初期化
        clearAll: function () {
            this.startTime = 0;
            this.nowTime = 0;
            this.diffTime = 0;
            this.times = [];
            this.stopTimer();
            this.animateFrame = 0;
        }
    },
    computed: {
        // 時間を計算
        hours: function () {
            return Math.floor(this.diffTime / 1000 / 60 / 60);
        },
        // 分数を計算 (60分になったら0分に戻る)
        minutes: function () {
            return Math.floor(this.diffTime / 1000 / 60) % 60;
        },
        // 秒数を計算 (60秒になったら0秒に戻る)
        seconds: function () {
            return Math.floor(this.diffTime / 1000) % 60;
        },
        // ミリ数を計算 (1000ミリ秒になったら0ミリ秒に戻る)
        milliSeconds: function () {
            return Math.floor(this.diffTime % 1000);
        }
    },
    filters: {
        // ゼロ埋めフィルタ 引数に桁数を入力する
        // ※ String.prototype.padStart() は IEじゃ使えない
        zeroPad: function(value, num){
            var num = typeof num !== 'undefined' ? num : 2;
            return value.toString().padStart(num,"0");
        }
    }
}
</script>