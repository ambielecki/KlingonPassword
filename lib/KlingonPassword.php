<?php
/*
 * This file is part of the Badcow Lorem Ipsum Generator.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ambielecki\KlingonPassword;

class KlingonPass{
    public function getPassword($words){
        $password = "";
        $wordarray = ['a', 'ampaS', 'aqtu', 'avwl', 'baH', 'baQ', 'batlh', 'beH', 'benal', 'betleHbey', 'bij', 'bireS', 'blQaHeH', 'boDegh', 'bomwl', 'boqHa', 'bov', 'buSHa', 'chab',
            'chagh','chaj', 'chanaS', 'chaqu', 'chaw', 'chergh', 'chIj', 'choba', 'chong', 'chorbargh', 'chu', 'chup', 'chuwl', 'DaH', 'Daq', 'Dav', 'Dejengva', 'Denlb', 'DeS', 'Diron',
            'Dlj','DoQe', 'Doj', 'Dor', 'Dub', 'Dum', 'DuranlungDir', 'eb', 'ejyo', 'emamnal', 'eSpanya', 'ghaH', 'ghaq', 'ghawran', 'ghem', 'ghew', 'ghIm', 'ghISDen', 'ghob',
            'ghoH','ghoma', 'ghor', 'ghubDaQ', 'ghur', 'HaD', 'HanDogh', 'Hargh', 'He', 'Heghtay', 'HerghQaywl', 'HISlaH', 'Hlch', 'Ho', 'Hogh', 'Hom', 'Hoqra', 'HotIhwI', 'HubneS',
            'Huj','Hurgh', 'Hutlh', 'Ij', 'IrneH', 'Iw', 'jaD', 'janluqpIqarD', 'jatIh', 'je', 'jemsStlyqlrq', 'jey', 'jIj', 'jIv', 'jol', 'joq', 'joS', 'juHqo', 'lab', 'lam', 'lat',
            'leH','lengwl', 'lev', 'lIghongan', 'lInqI', 'lolaw', 'loghqam', 'lolaHghach', 'lopno', 'lot', 'luH', 'lupDujHom', 'lutlh', 'maj', 'maqoch', 'matlh', 'may', 'megh', 'meQ',
            'meyIStIr', 'milloghqonwl', 'mIQ', 'mIva', 'moH', 'mon', 'moS', 'much', 'muH', 'mupwl', 'mutlhegh', 'naD', 'naghDir', 'namtun', 'naQ', 'nav', 'neb', 'nem', 'neSlo',
            'ngagh','ngav', 'ngeHbej', 'ngevwl', 'ngoch', 'ngong', 'ngugh', 'nIb', 'nIMwIbngogh', 'nISwlHlch', 'nlvnav', 'noD', 'nooch', 'nov', 'nuH', 'nuQ', 'o', 'oj', 'orghenrojmab',
            'ov','pab', 'paHbID', 'parmaqqay', 'paw', 'pegh', 'peq', 'pIch', 'pIlmoH', 'pIw', 'poj', 'poQ', 'potlh', 'puDaH', 'pum', 'puqpoH', 'pUqaD', 'puy', 'QaD', 'qaH', 'qalmoH',
            'Qan','Qapla', 'qarghan', 'qat', 'Qaw', 'qaywl', 'qegh', 'qem', 'qeq', 'qev', 'qeylISbetleH', 'qIbHeS', 'QIH', 'qImHa', 'qIq', 'qIvon', 'qoD', 'Qol', 'Qong', 'QopmoH',
            'qorgh','Qotlh', 'qub', 'qugh', 'Qul', 'qumwI', 'QuQ', 'qutluch', 'quvmoH', 'ram', 'raSya', 'ray', 'rejmorgh', 'rIHwI', 'rIthIh', 'roj', 'ron', 'roS', 'run', 'rutlh',
            'Saj','Saqghom', 'Saw', 'Sehlaw', 'Ser', 'Sibl', 'Sim', 'So', 'SojnaQ', 'SoQ', 'SoSbora', 'Sub', 'Sulop', 'Surchem', 'Suv', 'ta', 'taH', 'tam', 'taS', 'teb', 'tengchaH',
            'terapebot', 'teybe', 'tIH', 'tiHomIraH', 'tIQ', 'tIwI', 'tlham', 'tlhay', 'tlhlv', 'tlhon', 'tlhoy', 'tlhtb', 'tlhup', 'tlthlmqaH', 'toDSaH', 'toq', 'towaQ', 'tungHa',
            'tuqvol','uDHawtaj', 'um', 'uS', 'vaD', 'van', 'vaSa', 'veD', 'vemmoH', 'veregnganHaDlbaH', 'vID', 'vIng', 'vIychorgh', 'voQ', 'vulqan', 'vutwl', 'waH', 'wanI', 'way', 'wel',
            'wew','wlv', 'woj', 'wovmoHwl', 'wuv', 'yaj', 'yatIh', 'yejquv', 'yIn', 'yIt', 'yoDegh', 'yopwaHbuq', 'yu', 'yuQHom'
        ];
        for ($i=0; $i<$words; $i++) {
            $random = rand(0,(count($wordarray)-1));
            if($i>0){
                //code for words after word one (preceded by an underscore
                $password = $password."_".$wordarray[$random];
            }else{
                //word one code
                $password = $wordarray[$random];
            }
        }
        return $password;
    }
}