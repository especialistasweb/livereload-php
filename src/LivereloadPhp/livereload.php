<?

class LivereloadPHP {


    public static function init()
    {
        echo('<script src="http://'.$_SERVER['SERVER_NAME'].':35729/js/livereload.js?host='.$_SERVER['SERVER_NAME'].'"></script>');  
        echo('<script>console.log("Livereload loaded on port: 35729");</script>');
        
    }


}