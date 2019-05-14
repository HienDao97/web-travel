<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Auth\Authenticatable;


class Apartner extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'apartners';
    protected $fillable = ['username','name','avatar', 'sex', 'email','phone','password','birthday','address','star','specialized','city','experience', 'description', 'type_work', 'active'];
    protected $timestamp = true;

    public const TOURGUIDE_STATSU = 1; //huong dan vien du lich
    public const INTERPRETER_STATUS = 2; // phien dich vien
    public const COMMERCIAL_TRANSLATION_STATUS = 3; //dich thuong mai
    public const TRANSLATION_TEXT_STATUS = 4; //dich van ban
    public const PICK_UP_STATUS = 5; //don tien san bay

    public const MALE_STATUS = 1;//name
    public const FEMALE_STATUS = 0;//nu

    public const ACTIVE_STATUS = 1;
    public const UNAVTICE_STATUS = 0;

    /**
     * List sex
     *
     * @return array
     */
    public static function listSex(){
        $list = [
            self::FEMALE_STATUS => "Nữ",
            self::MALE_STATUS => "Nam"
        ];
        return $list;
    }
    /**
     * List city
     *
     * @return array
     */
    public static function listCity(){
        $list = [
            0 => "Hà Nội",
            1 => "Hải Phòng",
            2 => "Đà Nẵng",
            3 => "Nha Trang",
            4 => "TP. Hồ Chí Minh"
        ];
        return $list;
    }
    /**
     * List work
     *
     * @return array
     */
    public static function listWork(){
        $list = [
            self::TOURGUIDE_STATSU => "Hướng dẫn viên",
            self::INTERPRETER_STATUS => "Phiên dịch viên",
            self::COMMERCIAL_TRANSLATION_STATUS => "Dịch thương mại",
            self::TRANSLATION_TEXT_STATUS => "Dịch văn bản",
            self::PICK_UP_STATUS => "Đón tiễn bay"
        ];
        return $list;
    }

    /**
     * Render html for list work
     *
     * @return string
     */
    public static function genListWorkHtml($old_value = ""){
        $listWorks = self::listWork();
        $html = "";
        for($i = 0; $i < count($listWorks) ; $i++){
            $j = $i + 1;
            if($j == 1 || $j == 4){
                $html .= "<tr>";
            }
            $html .= "<td>
                        <input type=\"checkbox\" name='type_work[]' value=". $j ." name=\"check-box\" /> <span>". $listWorks[$j]."</span>
                    </td>";
            if($j == 3 || $j == 5){
                $html .= "</tr>";
            }
        }
        return $html;
    }

    /**
     * Render option html
     *
     * @param string $old_value
     * @param $type
     * @return string
     */
    public static function rendListOptionHtml($old_value = "", $type){
        $html = "";
        if($type == "city"){
            $list = self::listCity();
        }else if($type == "sex"){
            $list = self::listSex();
        }
        foreach ($list as $key => $value){
            if(isset($old_value) && $old_value == $key){
                $html .= "<option value=". $key ." selected>". $value ."</option>";
            }
            else{
                $html .= "<option value=". $key .">". $value ."</option>";
            }
        }
        return $html;
    }
}
