<h1>Setting.</h1>

 <h3>1. Session problem, fix. May use php version 7.1 up.</h3>
 <p>If use Php version 7.1, Need change code, at codeIgniter file.(session breaking problem.)</p>
 <h4>Check a file. system/libraries/Session/Session.php.-> make, // </h4>
 <p>//     session_start();  //140 line.</p>
 <p></p>
<p> // Security is king                 //312 line.</p>
<p>//    ini_set('session.use_trans_sid', 0);</p>
<p>//    ini_set('session.use_strict_mode', 1);</p>
<p>//    ini_set('session.use_cookies', 1);</p>
<p>//    ini_set('session.use_only_cookies', 1);</p>
<p>//    ini_set('session.hash_function', 1);</p>
<p>//    ini_set('session.hash_bits_per_character', 4);</p>
<br/>
<h4>Check a file. /index.php -> add writting(anyline)-> session_start();</h4>
 <p>Reference, this blog article, Link : <a href="http://blog.naver.com/tt2t2am1118/221007391890">http://blog.naver.com/tt2t2am1118/221007391890</a></p>
 <br/>
 <h3>2. Check session file and make a session table.</h3>
 <h4>Check a file. /application/config/config.php</h4>
<p> $config['sess_driver'] = 'database';</p>
<p>$config['sess_cookie_name'] = 'ci_session';</p>
<p>$config['sess_expiration'] = 7200;</p>
<p>$config['sess_save_path'] = 'ci_sessions';</p>
<p>$config['sess_match_ip'] = FALSE;</p>
<p>$config['sess_time_to_update'] = 300;</p>
<p>$config['sess_regenerate_destroy'] = FALSE;</p>
<br/>
<h4>Create a ci_sessions table, database for example SQL-> MySql</h4>
<p>CREATE TABLE IF NOT EXISTS `ci_sessions` (</p>
<p>        `id` varchar(40) NOT NULL,</p>
<p>        `ip_address` varchar(45) NOT NULL,</p>
<p>        `timestamp` int(10) unsigned default 0 NOT NULL,</p>
<p>        `data` blob NOT NULL,</p>
<p>        PRIMARY KEY (id),</p>
<p>);</p>
<h4>About, session. codeigniter menual reference : <a href="http://www.ciboard.co.kr/user_guide/en/libraries/sessions.html">http://www.ciboard.co.kr/user_guide/en/libraries/sessions.html</a></h4>
<br/> 
<h3>3. Create user_info table,  database for example SQL-> MySql</h3>
<p>CREATE TABLE `user_info` (</p>
<p>  `user_id` int(20) NOT NULL AUTO_INCREMENT,</p>
<p>  `user_name` varchar(20) DEFAULT NULL,</p>
<p>  `user_email` varchar(40) DEFAULT NULL,</p>
<p>  `user_pw` varchar(30) DEFAULT NULL,</p>
<p>  `create_date` date DEFAULT NULL,</p>
<p>  `earn` int(11) DEFAULT NULL,</p>
<p>  PRIMARY KEY (`user_id`),</p>
<p>  UNIQUE KEY `user_id` (`user_id`),</p>
<p>  KEY `user_name` (`user_name`,`user_email`)</p>
<p>) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;</p>
<br/>
<h3>4. /application/config/database.php </h3>
<p>Need a DBMS(This setting, use a MySql), local for example.</p>
<p>$db['default'] = array(</p>
<p>'dsn'	=> '',</p>
<p>'hostname' => 'localhost', </p>
<p>'username' => '',  //like word, root</p>
<p>'password' => '',// root password</p>
<p>'database' => '',// sql, create database name1; then use, name1.</p>
<p>'dbdriver' => 'mysqli',</p>
<p>'dbprefix' => '',</p>
<p>'pconnect' => FALSE,</p>
<p>'db_debug' => (ENVIRONMENT !== 'production'),</p>
<p>'cache_on' => FALSE,</p>
<p>'cachedir' => '',</p>
<p>'char_set' => 'utf8',</p>
<p>'dbcollat' => 'utf8_general_ci',</p>
<p>'swap_pre' => '',</p>
<p>'encrypt' => FALSE,</p>
<p>'compress' => FALSE,</p>
<p>'stricton' => FALSE,</p>
<p>'failover' => array(),</p>
<p>'save_queries' => TRUE</p>
<p>);</p>
<br/>
<p>How to email function use.</p>
<p>application/libralis/email.php, config writing.</p>
<p></p>
<h3>Thank you for watching, ReadME(setting) file.</h3>

 
 
 
