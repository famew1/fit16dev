class EmailConfig {
    public function __construct() {
        // Do conditional assignments here.
	'from' => 'jessicagreer18@yahoo.com',
		'sender' => null,
		'to' => 'jwgre2@student.monash.edu',
		'cc' => null,
		'bcc' => null,
		'replyTo' => null,
		'readReceipt' => null,
		'returnPath' => 'jessicagreer18@yahoo.com',
		'messageId' => true,
		'subject' => 'Test',
		'message' => 'Giving it a whirl',
		'headers' => 'What',
		'viewRender' => null,
		'template' => false,
		'layout' => false,
		'viewVars' => null,
		'attachments' => null,
		'emailFormat' => null,
		'transport' => 'Mail',
		'host' => 'localhost',
		'port' => 25,
		'timeout' => 30,
		'username' => 'user',
		'password' => 'secret',
		'client' => null,
		'log' => true,
		//'charset' => 'utf-8',
		//'headerCharset' => 'utf-8',
    }
}