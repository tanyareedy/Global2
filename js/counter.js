
let OnlineCounter = {
    template: `<span>{{counter}}</span>`,

    props: ['min', 'max'],

    data: function () {
        return {
            counter: 25
        };
    },

    mounted: function () {
        let vm = this;

        this.counter = this.randomInt(this.min, this.max);
        let randomSeconds1 = this.randomInt(5000, 7000);
        let randomSeconds2 = this.randomInt(6000, 8000);

        setInterval(function () {
            vm.doCounterChange()
        }, randomSeconds1);

        setInterval(function () {
            vm.doCounterChange()
        }, randomSeconds2)
    },

    methods: {
        randomInt: function (min = 3, max = 15) {
            return Math.floor(Math.random() * (max - min + 1)) + min
        },

        plusOrMinus: function () {
            let randomNumber = this.randomInt(1, 4);

            if (randomNumber > 2) {
                return 'plus'
            } else {
                return 'minus'
            }
        },

        doCounterChange: function () {
            let whatTodo = this.plusOrMinus()
            let onlineChange = this.randomInt(1, 5)

            if (whatTodo == 'plus') {
                this.counter = this.counter + onlineChange
            } else {

                if (this.counter > 10) {
                    this.counter = this.counter - onlineChange
                }
            }

        },
    }
};


new Vue({
    el: '#vueTarget',
    components: {
        'online-counter': OnlineCounter
    }
});

new Vue({
    el: '#vueTarget2',
    components: {
        'online-counter': OnlineCounter
    }
});
new Vue({
    el: '#vueTarget3',
    components: {
        'online-counter': OnlineCounter
    }
});

new Vue({
    el: '#vueTarget4',
    components: {
        'online-counter': OnlineCounter
    }
});

new Vue({
    el: '#vueTarget5',
    components: {
        'online-counter': OnlineCounter
    }
});


