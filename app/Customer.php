<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['username','name','avatar','email','phone','password', 'sex', 'datebirth'];

    public const TOURGUIDE_STATSU = 1; //huong dan vien du lich
    public const INTERPRETER_STATUS = 2; // phien dich vien
    public const COMMERCIAL_TRANSLATION_STATUS = 3; //dich thuong mai
    public const TRANSLATION_TEXT_STATUS = 4; //dich van ban
    public const PICK_UP_STATUS = 5; //don tien san bay

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
    public static function genListWorkHtml(){
        $listWorks = self::listWork();
        $html = "";
        for($i = 0; $i < count($listWorks) ; $i++){
            $j = $i + 1;
            if($j == 1 || $j == 4){
                $html .= "<tr>";
            }
            $html .= "<td>
                        <input type=\"checkbox\" value=". $j ." name=\"check-box\" /> <span>". $listWorks[$j]."</span>
                    </td>";
            if($j == 3 || $j == 5){
                $html .= "</tr>";
            }
        }
        return $html;
    }

    /**
     * Render List option city
     *
     * @return string
     */
    public static function rendListCityHtml(){
        $html = "";
        $listCitys = self::listCity();
        foreach ($listCitys as $key => $value){
            $html .= "<option value=". $key .">". $value ."</option>";
        }
        return $html;
    }

}
