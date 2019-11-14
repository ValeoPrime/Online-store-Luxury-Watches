<?php


namespace Ishop;


class Cache
{
    use TSingletone;

    public function set($key, $data, $seconds = 3600){ //ключ, дата и время на которое кешируются данные
        if($seconds){
            $content['data'] = $data;
            $content['end_time'] = time() + $seconds; // данные для проверки не устарел ли кеш
            if(file_put_contents(CACHE . '/' . md5($key) . '.txt', serialize($content))){
                return true;
            }
        }
        return false;
    }

    public function get($key){
        $file = CACHE . '/' . md5($key) . '.txt';
        if(file_exists($file)){
            $content = unserialize(file_get_contents($file));
            if(time() <= $content['end_time']){ // сама проверка, данных либо нет лидо они утарели
                return $content;
            }
            unlink($file);
        }
        return false;
    }

    public function delete($key){
        $file = CACHE . '/' . md5($key) . '.txt';
        if(file_exists($file)){
            unlink($file);
        }
    }

}