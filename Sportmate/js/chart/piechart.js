

function drawLeftPie() {

    var piechart1 = echarts.init(document.getElementById("piechart1"));

    option = {
        title : {
            subtext: '单位:运动消耗的卡路里(C)',
            x:'center',
            top:'5%'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },

        legend: {
            orient: 'horizontal',
            left: 'left',
            data: ['羽毛球','乒乓球','篮球','足球','跑步','游泳']
        },
        series : [
            {
                name: '来源',
                type: 'pie',
                radius : '55%',
                center: ['50%', '50%'],
                data:[
                    {value:719, name:'羽毛球'},
                    {value:120, name:'乒乓球'},
                    {value:410, name:'篮球'},
                    {value:310, name:'足球'},
                    {value:501, name:'跑步'},
                    {value:670, name:'游泳'}
                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ],
        // itemStyle: {
        //     normal: {
        //         // 设置扇形的颜色
        //         color: '#4A610E',
        //         shadowBlur: 20,
        //         shadowColor: 'rgba(0, 0, 0, 0.5)'
        //     }
        // },
        // visualMap: {
        //     // 不显示 visualMap 组件，只用于明暗度的映射
        //     show: false,
        //     // 映射的最小值为 80
        //     min: 400,
        //     // 映射的最大值为 600
        //     max: 500,
        //     inRange: {
        //         // 明暗度的范围是 0 到 1
        //         colorLightness: [0.2, 0.6]
        //     }
        // },
        backgroundColor: '#F5F5F5'
    };
    piechart1.setOption(option);


}

function drawRightPie() {
    var piechart2 = echarts.init(document.getElementById("piechart2"));
    option = {

        title : {
            subtext: '单位:运动的次数',
            x:'center',
            top:'5%'
        },
        tooltip : {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            orient: 'horizontal',
            left: 'left',
            data: ['4am-8am','8am-12am','12am-16am','16am-20am','20am以后']
        },
        series : [
            {
                name: '来源',
                type: 'pie',
                radius : '55%',
                center: ['50%', '50%'],
                data:[
                    {value:62, name:'4am-8am'},
                    {value:28, name:'8am-12am'},
                    {value:8, name:'12am-16am'},
                    {value:41, name:'16am-20am'},
                    {value:19, name:'20am以后'},
                ],
                itemStyle: {
                    emphasis: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }
        ],
        backgroundColor: '#F5F5F5'
    };
    piechart2.setOption(option);
    
}


drawLeftPie();
drawRightPie();

