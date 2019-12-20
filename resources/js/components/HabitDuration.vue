<template>
    <v-container>
        <v-row>
            <v-col cols="12">
                <v-card>
                    <form>
                        <v-row>
                            <v-col cols="9">
                                <v-card-subtitle>Habit Name</v-card-subtitle>
                                <v-card-actions>
                                    <v-text-field
                                            label="Input Habit Name"
                                    >
                                    </v-text-field>
                                </v-card-actions>
                            </v-col>
                            <v-col cols="3">
                                <v-card-subtitle>Timer</v-card-subtitle>
                                <v-card-actions>
                                    <v-btn class="mx-2" fab dark small color="cyan">
                                        <v-icon dark>mdi-play-circle-outline</v-icon>
                                    </v-btn>
                                </v-card-actions>
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
                        <v-row>
                            <v-col cols="9">
                                <v-card-subtitle>Habit Name</v-card-subtitle>
                                <v-card-text
                                        align="center"
                                        large
                                >
                                    <div class="display-2 font-weight-thick">禁酒</div>
                                </v-card-text>
                            </v-col>
                            <v-col cols="3">
                                <v-card-subtitle>Timer</v-card-subtitle>
                                <v-card-text>12day 11:23:54</v-card-text>
                                <v-card-actions>
                                    <v-btn class="mx-2" fab dark small color="red">
                                        <v-icon dark>mdi-stop-circle-outline</v-icon>
                                    </v-btn>
                                </v-card-actions>
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
                        <v-row>
                            <v-col cols="9" align="center" justify="center">
                                <v-card-subtitle>Habit Name</v-card-subtitle>
                                <v-layout justify-center align-center>
                                    <v-card-text>
                                        <div class="display-2 font-weight-thick">毎日本を読む</div>
                                    </v-card-text>

                                </v-layout>
                            </v-col>
                            <v-col cols="3">
                                <v-card-subtitle>Timer</v-card-subtitle>
                                <v-chip
                                        class="ma-2"
                                        color="green"
                                        text-color="white"
                                >
                                    Best Record
                                </v-chip>
                                <v-card-text>154day 11:23:54</v-card-text>
                                <v-card-actions>
                                    <v-btn class="mx-2" fab dark small color="red">
                                        <v-icon dark>mdi-stop-circle-outline</v-icon>
                                    </v-btn>
                                </v-card-actions>
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
                        <v-row>
                            <v-col cols="9" align="center" justify="center">
                                <v-card-subtitle>Habit Name</v-card-subtitle>
                                <v-card-text>
                                    <div class="display-2 font-weight-thick">毎日本を読む</div>
                                </v-card-text>
                                <v-chip
                                        class="ma-2"
                                        color="green"
                                        text-color="white"
                                >
                                    Best Record
                                </v-chip>
                                <v-card-text class="display-1">154day 11:23:54</v-card-text>
                            </v-col>
                            <v-col cols="3" justify="center" align-self="center">
                                <v-btn class="mx-1" fab dark large color="red">
                                    <v-icon dark large>mdi-stop-circle-outline</v-icon>
                                </v-btn>
                                <v-card-text>stop</v-card-text>
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
                                <v-btn class="mx-1" fab dark large color="cyan">
                                    <v-icon dark large>mdi-play-circle-outline</v-icon>
                                </v-btn>
                                <v-card-text>start</v-card-text>
                            </v-col>
                        </v-row>
                    </form>
                </v-card>
            </v-col>
        </v-row>
        <v-row>
            <v-col cols="12" sm="12" md="6">
                <v-card>
                    <v-card-text style="height: 300px;" class="grey lighten-5"></v-card-text>
                    <v-card-text style="height: 100px; position: relative">
                        <v-btn
                                absolute
                                dark
                                fab
                                top
                                right
                                color="pink"
                        >
                            <v-icon>mdi-plus</v-icon>
                        </v-btn>
                    </v-card-text>
                </v-card>
            </v-col>
            <v-col cols="12" sm="12" md="6">
                <v-card>
                    <v-toolbar extended>
                        <v-app-bar-nav-icon></v-app-bar-nav-icon>
                        <template v-slot:extension>
                            <v-btn
                                    color="pink"
                                    dark
                                    small
                                    absolute
                                    bottom
                                    left
                                    fab
                            >
                                <v-icon>mdi-plus</v-icon>
                            </v-btn>
                        </template>
                    </v-toolbar>
                    <v-card-text style="height: 236px;" class="grey lighten-5"></v-card-text>
                    <v-card-text style="height: 100px; position: relative"></v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>