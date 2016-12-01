var barchart = echarts.init(document.getElementById("barchart"));

option = {
    color: ['#91B013'],
    tooltip : {
        trigger: 'axis',
        axisPointer : {            // 坐标轴指示器，坐标轴触发有效
            type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
        }
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            data : ['周一', '周二', '周三', '周四', '周五', '周六', '周日'],
            axisTick: {
                alignWithLabel: true
            }
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
        {
            name:'运动量',
            type:'bar',
            barWidth: '60%',
        }
    ],

    backgroundColor: '#F5F5F5',
    textStyle:{
        color : '#9a9b9f',
        fontSize: 18,
    }

};

barchart.setOption(option);
