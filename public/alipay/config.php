<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016090800463579",

		//商户私钥
		'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCxk9qc8D2T2O92gf8CIzi+hQeyQMb5TsyP8gM+YZvaRi5utdIgsjI2NPpaJOqlJGU1rpSPXqURqk1g6uEuGyJlDt3sudM4o2kDSTa+nJtThuJGnuVoO+8LoOfSA4JOWZXYQ5ChtnuE+uwAKBL2NfWURWsnmgA2SoJuYeOV8vYR5WF9+2PljHDu7hzgvhBWv6GuQvPGqm2rB6g/dlqc8YF4/rmRPHhtAvjfH+ZeXGC4eMD0iqMwA1mFzcGKgbacxKLpVa6qAvE+X8r2nMc5t0gs+wVMo7cDRbUGACqg/sZJdcir8JZX0iNvhVE29KaReEss5n5rLpvfiFSmfEJQPENXAgMBAAECggEANIv89827WwGpspa7ICXOB8qTwXKbrnBb5giGXzJBDTERUl9pQ5WXeCTrJDuiV6XScTUs7tPh4r1TUmeOpLcQ0Xi5wPAoCa2JSJiko3jyGaBjWuRwHA0IKpe9oY66Q3cM+UbdCI1YNbyOk2lIWyUSe4KjN7/Bak9YE1PSJbAUkqyfxiEXvohHEoULIlfzLBMf+hUMNFVikxiO5Fjy9OU3Xl1qFM7ZgX8eyN7bTGlSHYjkrWmnsfVkvawYCxWIYW7AY0IMFiqGYdVL3XeQ/XhLxgwSdilRa4/FL6/O1cYmNJBkI2+bwtysm4XTQ3AkLFU274+xc8aextZ3OXgLdlKMoQKBgQDvmos5nXKAsxooDNzRg019JJ+YiuqaRLwmD+jHF4v3YqqjiOo3VIuauKRmxAKl2BZlFNfMWMjZbrvvw/NcRSH4mjE6Bf8mGa2zr4efmBLXAso69N3sRWyAikEB658in26re1GpO3YNI9bjQiLHtUjcMIAgu94D5sZkuQsji4kxcQKBgQC9urdHV1kHjHgZAWhjAjLYUH4CC3rhSyO1cfDu9sZPT2/yXIdy3uB3sZUQ2/Z0SAkX5lIoBD3UtJGQ1t1MvwIED2dq/PqjZDis6Pg2hXEng4+al9M1ltMpljounVyhPTGfvxyiH/vwzZ9sV6XMeoI2EVdKZ9vaZCsAEp/gtRHdRwKBgQDYGlY598S/SUptFvTOzpNELJT5O0nPK/FajvzPHHC0BjyLVMCSeOGVAbXdrioJNHU2Y+8ism0sltBQtzY2YW/7Te7aO3BeB8kACG/VRI6xeCW3uQSzxgXPhWKOfdpAmvVxGr+TWDroLQvyWsMNxnbZibD2VRsv/6OuUqs2OvLZMQKBgDE2SCnaDz61AcXCprffrx6KqlSPc70SR13eAxeIrOGPgkMEGyIBi4mgZ0DrPR7mPG2VkUPN7dfJSmSeRuKMPNKeyD1pBv3wlf7Lou5JaJNOPaZksSUaTQVhcQ/8QzWTcNa1tJCc6TWJsEti5J+IO1QY5WJoVA9uofSv4AZiERMrAoGATF9fURR+yjDFQSkCgrWIaOrkobWt46arvPkjByas60xh1G6bGlCI8u5PX0cmkgMkIj7FFGtPAeki3Q1lBUSW7kds5LSKnfWGzGNcmndzjn7aPETUw4fQmyOk6Az+AhnQSzkq+xTlCyNQWVw0v/HDhSR8BX9+JJr2AVIaqPYF7Ew=",
		
		//异步通知地址
		'notify_url' => "http://myproject.com/alipay/notify_url.php",
		
		//同步跳转
		'return_url' => "http://myproject.com/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",
	 //正式上线的网关 //"https://openapi.alipay.com/gateway.do"
		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsZPanPA9k9jvdoH/AiM4voUHskDG+U7Mj/IDPmGb2kYubrXSILIyNjT6WiTqpSRlNa6Uj16lEapNYOrhLhsiZQ7d7LnTOKNpA0k2vpybU4biRp7laDvvC6Dn0gOCTlmV2EOQobZ7hPrsACgS9jX1lEVrJ5oANkqCbmHjlfL2EeVhfftj5Yxw7u4c4L4QVr+hrkLzxqptqweoP3ZanPGBeP65kTx4bQL43x/mXlxguHjA9IqjMANZhc3BioG2nMSi6VWuqgLxPl/K9pzHObdILPsFTKO3A0W1BgAqoP7GSXXIq/CWV9Ijb4VRNvSmkXhLLOZ+ay6b34hUpnxCUDxDVwIDAQAB",
);