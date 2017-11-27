<?php
/**
 * @author  tianxh.
 * email: tianxh@jpgk.com.cn
 * QQ:2018997757 * Date: 2017/1true/false4
 * Time: 14:49
 */
spl_autoload_register(function($class){
    include $class . '.php';
});

new \src\Block\H\H1("会员营销接口项目接口文档");


new \src\Block\H\H2("一. 数据接口规范");
new \src\Block\H\H3("1.请求");
$ulList = [
	"请求以POST 方式提交，请求参数以JSON格式的Body内容提交。",
	"签名的数据根据接口的定义，参见附录签名机制。",
	"各请求参数的参数值的前后不允许出现空白符，否则将影响签名的正确性。"
];
new \src\Block\Li\OL($ulList);



new \src\Block\H\H3("2.协议参数(任何请求都必须携带协议参数)");
new \src\Block\Table([
	[
		"字段名" => "sign",
		"类型" => "字符串",
		"说明" => "签名串,参考签名机制",
		"可空" => "N",
		"参数样例" => "",
	],
	[
		"timestamp",
		"字符串",
		"时间戳，参考时间戳说明",
		"N",
		"",
	]
]);



new \src\Block\H\H2("二. 接口列表");
new \src\Block\H\H3("1. 会员注册接口");
new \src\Block\Text("接口名：regist");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "platform",
        "类型" => "字符串",
        "说明" => "会员的来源，微信传“wechat”",
        "可空" => "N",
        "参数样例" => "wechat",
    ],
    [
        "identity",
        "字符串",
        "会员来源标识，微信用户传openId",
        "N",
        "",
    ],
    [
        "nickName",
        "字符串",
        "会员昵称，特殊字符需要转义",
        "Y",
        "",
    ],
    [
        "sex",
        "数字",
        "会员性别，1--男；2--女；其它--保密",
        "Y",
        "",
    ],
    [
        "avatar",
        "字符串",
        "头像",
        "Y",
        "",
    ],
    [
        "birthday",
        "date",
        "会员生日???--微信可能无法获取到",
        "Y",
        "2017-11-11",
    ],
]);
new \src\Block\Text("返回值：");
$code1 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":{
        "token":"登录成功后返回的登录标识--有效期问题？？"
    }
}
CODESET;
new \src\Block\Code("php",$code1);


new \src\Block\H\H3("2.会员登录接口");
new \src\Block\Text("接口名：login");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "platform",
        "类型" => "字符串",
        "说明" => "会员的来源，微信传“wechat”",
        "可空" => "N",
        "参数样例" => "wechat",
    ],
    [
        "identity",
        "字符串",
        "会员来源标识，微信用户传openId",
        "N",
        "",
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":{
        "token":"登录成功后返回的登录标识--有效期问题？？",
    }
}
CODESET;
$code = new \src\Block\Code("php",$code2);


new \src\Block\H\H3("3.获取会员中心数据接口");
new \src\Block\Text("接口名：member");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "会员登录后返回的登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":{
        "nickname":"小明",
        "avatar":"http://www.wechat.com/a.png",
        "sex":"1",
        "couponCount":5,
        "score":1200,
        "balance":1200.5,//总余额
        "recharge":1000.5,//充值余额
        "gift":200,//赠送余额
    }
}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("4.积分记录接口");
new \src\Block\Text("接口名：scoreList");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "page",
        "数字",
        "当前页",
        "N",
        "",
    ],
    [
        "pageSize",
        "数字",
        "每页显示多少条数据",
        "N",
        ""
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":{
        "pageTotal":3,
        "scoreList":[
            {
                "type":"积分操作类型：1---下单赠积分;2---下单扣积分",
                "score":"积分操作额：5",
                "time":"2015-12-30 08:24:20",
            }
        ]
    }
}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("5.用户中心优惠券列表接口");
new \src\Block\Text("接口名：getCouponMarketingList");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":[
        {
            "couponId":12,
            "type":"优惠券类型：1---满减券",
            "name":"优惠券名称",
            "expireTime":"2015-12-30 08:24:20",
            "man" => 20,//满减根据优惠券类型判断，以后增加折扣券时，可能会换成：man:20,zheKou:10
            "jian" => 5
        }
    ]

}
CODESET;
$code = new \src\Block\Code("php",$code2);




new \src\Block\H\H3("6.钱包消费记录接口");
new \src\Block\Text("接口名：moneyList");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "page",
        "数字",
        "当前页",
        "N",
        "",
    ],
    [
        "pageSize",
        "数字",
        "每页显示多少条数据",
        "N",
        ""
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":[
        "pageTotal":3,
        "moneyList":[
            {
                "type":"钱包操作类型：1---充值;2---赠送;3--消费;4--退款",
                "money":"钱包操作额：5",
                "time":"2015-12-30 08:24:20",
            }
        ]
    ]
}
CODESET;
$code = new \src\Block\Code("php",$code2);


new \src\Block\H\H3("7.订单列表接口");
new \src\Block\Text("接口名：moneyList");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "page",
        "数字",
        "当前页",
        "N",
        "",
    ],
    [
        "pageSize",
        "数字",
        "每页显示多少条数据",
        "N",
        ""
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":[
        "pageTotal":3,
        "orderList":[
            {
                "orderId":12,
                "orderCode":"14566587896411",
                "deviceCode":"MK001",
                "deviceAddress":"北京市朝阳区地铁5号线立水桥站",
                "totalMoney":50,
                "discountMoney":10,
                "moneyPay":40,
                "payType":"1---微信支付;2---钱包余额支付",
                "status":"1---已出货……"
                "time":"2015-12-30 08:24:20",
                "items":[
                    {
                        "goodsId":12,
                        "goodsName":"可口可乐250ml",
                        "goodsPic":"http://XXX.lz517.com/a.png",
                        "salePrice":8,
                        "amount":5,
                        "successNum":3,//出货成功数量
                        "errorNum":2,//出货失败数量
                    }
                ]
            }
        ]
    ]
}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("8.获取充值数据接口");
new \src\Block\Text("接口名：rechargeItemList");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":[
        {
            "itemId":1,
            "rechargeMoney":50
        },
        {
            "itemId":2,//充值选项Id
            "rechargeMoney":100,
            "marketingId":1,//活动id
            "levelId":1,//额度等级id
            "sendMoney":20,//赠送的金额
        }
    ]
}
CODESET;
$code = new \src\Block\Code("php",$code2);


new \src\Block\H\H3("9.发起充值接口");
new \src\Block\Text("接口名：startRecharge");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "itemId",
        "数字",
        "充值选项Id",
        "N",
        ""
    ],
    [
        "rechargeMoney",
        "数字",
        "充值金额",
        "N",
        ""
    ],
    [
        "payType",
        "字符串",
        "支付方式",
        "N",
        ""
    ],
    [
        "marketingId",
        "数字",
        "活动Id",
        "Y",
        ""
    ],
    [
        "levelId",
        "数字",
        "额度等级Id",
        "Y",
        ""
    ],
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":[
        "orderCode":"发起支付的订单号",
        "todo":是否要返回支付配置??"
    ]
}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("10.充值成功回调接口");
new \src\Block\Text("接口名：rechargePayNotify");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "rechargeCode",
        "类型" => "字符串",
        "说明" => "发起支付是的订单号",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "字段名" => "transactionNum",
        "类型" => "字符串",
        "说明" => "第三方支付时的交易号",
        "可空" => "N",
        "参数样例" => "",
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("11.获取可参与的领取优惠券活动接口");
new \src\Block\Text("接口名：getCouponMarketingList");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":[
        {
            "marketingId":12,
            "type":"优惠券类型：1---满减券",
            "name":"优惠券名称",
            "expireTime":"2015-12-30 08:24:20",
            "man" => 20,//满减根据优惠券类型判断，以后增加折扣券时，可能会换成：man:20,zheKou:10
            "jian" => 5
        }
    ]

}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("12.用户领取优惠券接口");
new \src\Block\Text("接口名称：getCouponOfMember");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "marketingId",
        "数字",
        "活动Id",
        "N",
        ""
    ],
    [
        "couponTplId",
        "数字",
        "要领取的优惠券的模板的id",
        "N",
        ""
    ],
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("13.用户下单前，查询商品和可用优惠券接口");
new \src\Block\Text("接口名称：orderConfirm");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "money",
        "数字",
        "需要支付的金额",
        "N",
        ""
    ],
    [
        "deviceCode",
        "字符串",
        "设备编号",
        "N",
        ""
    ],
    [
        "goodsInfo",
        "字符串",
        "售货机商品组成的特殊字符",
        "N",
        ""
    ],
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
  "data": {
      "balance":20,   //余额
      "score":10,   //积分
      "couponList": [  //优惠券列表
          {
              "conditionMoney": 20,
              "couponId": 1,
              "couponName": "新用户专享",
              "createTime": "2017-02-14 16:24:07",
              "endTime": "2017-02-17 16:24:02",
              "money": 10,
              "startTime": "2017-02-14 16:23:56",
              "status": 1,
              "updateTime": "2017-02-14 16:24:35",
              "usable": true //可用
          },
          {
              "conditionMoney": 50,
              "couponId": 2,
              "couponName": "满50减10",
              "createTime": "2017-02-14 13:50:52",
              "endTime": "2017-03-08 13:50:45",
              "money": 10,
              "startTime": "2017-02-14 13:50:39",
              "status": 1,
              "updateTime": "2017-02-15 14:20:29",
              "usable": false  //不可用
          }
    ],
    "goodsInfo": [  //商品信息
        {
            "goodsId": 1,
            "goodsName": "怡宝（555ml）",
            "salePrice": 2
        },
        {
            "goodsId": 2,
            "goodsName": "恒大冰泉1",
            "salePrice": 3.5
        }
    ],
    },
  "result": "执行成功",
  "status": 1001,
  "success": true/false
}

CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("14.用户下单并发起支付接口");
new \src\Block\Text("接口名称：memberDoOrder");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "deviceCode",
        "字符串",
        "设备编号",
        "N",
        ""
    ],
    [
        "payMoney",
        "数字",
        "需要支付的金额",
        "N",
        ""
    ],
    [
        "score",
        "数组",
        "支付的时候，选择使用的积分",
        "N",
        ""
    ],
    [
        "couponId",
        "数字",
        "支付时，选择的优惠券id",
        "N",
        ""
    ],
    [
        "payType",
        "字符串",
        "支付方式，微信(wechat)或者钱包(wallet)",
        "N",
        ""
    ],
    [
        "goodsInfo",
        "字符串",
        "售货机商品组成的特殊字符",
        "N",
        ""
    ],
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false,
    "data":{
        "orderCode":"X0110102220393"//第三方支付时，需要的订单号
    }
}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("15.订单支付成功回调接口");
new \src\Block\Text("接口名：orderPayNotify");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "orderCode",
        "类型" => "字符串",
        "说明" => "发起支付是的订单号",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "字段名" => "transactionNum",
        "类型" => "字符串",
        "说明" => "第三方支付时的交易号",
        "可空" => "N",
        "参数样例" => "",
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
}
CODESET;
$code = new \src\Block\Code("php",$code2);



new \src\Block\H\H3("16.订单详情接口");
new \src\Block\Text("接口名：orderDetail");
new \src\Block\Text("参数：");
new \src\Block\Table([
    [
        "字段名" => "token",
        "类型" => "字符串",
        "说明" => "登录标识",
        "可空" => "N",
        "参数样例" => "",
    ],
    [
        "orderCode",
        "字符串",
        "当前页",
        "N",
        "",
    ]
]);
new \src\Block\Text("返回值：");
$code2 = <<<CODESET
{
    "result": "执行成功",
    "status": 1001,
    "success": true/false
    "data":{
        "orderId":12,
        "orderCode":"14566587896411",
        "deviceCode":"MK001",
        "deviceAddress":"北京市朝阳区地铁5号线立水桥站",
        "totalMoney":50,
        "discountMoney":10,
        "moneyPay":40,
        "payType":"1---微信支付;2---钱包余额支付",
        "status":"1---已出货……"
        "time":"2015-12-30 08:24:20",
        "items":[
            {
                "goodsId":12,
                "goodsName":"可口可乐250ml",
                "goodsPic":"http://XXX.lz517.com/a.png",
                "salePrice":8,
                "amount":5,
                "successNum":3,//出货成功数量
                "errorNum":2,//出货失败数量
                "passageCode":"1-1",货道号
            }
        ]
    }
}
CODESET;
$code = new \src\Block\Code("php",$code2);



$page = new \src\Page($code);
$page->html(\src\Style::NORMAL,"会员营销接口项目接口文档");//显示html
//$page->code();                  //显示markdown编码