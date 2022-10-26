<?php
$pilih="magister";
$ipk=3.00;
$status_pilih="";
$status_kategori="";
$status="";


switch($pilih){
    case 'D3/D4/S1' :
        $status_pilih = "D3/D4/S1";
        
        if(($ipk >=3.51) && ($ipk <=4.00)){
            $status_kategori="Dengan Pujian";
        }else if(($ipk>=2.76) && ($ipk<=3.50)){
            $status_kategori="Sangat Memuaskan";
        }elseif(($ipk>=2.00) && ($ipk<=2.75)){
            $status_kategori="Memuaskan";
        }else{
            $status_kategori="Tidak ditemukan";
        }
        
        break;

    
    case 'profesi' :
        $status_pilih="Profesi";
        if(($ipk >=3.76) && ($ipk <=3.50)){
            $status_kategori="Dengan Pujian";
        }else if(($ipk>=3.51) && ($ipk<=3.75)){
            $status_kategori="Sangat Memuaskan";
        }elseif(($ipk>=3.00) && ($ipk<=3.50)){
            $status_kategori="Memuaskan";
        }else{
            $status_kategori="Tidak ditemukan";
        }
        $Status="Ditemukan";
        break;

        case 'magister' :
            $status_pilih="magister";
            if(($ipk >=3.71) && ($ipk <=4.00)){
                $status_kategori="Dengan Pujian";
            }else if(($ipk>=3.41) && ($ipk<=3.70)){
                $status_kategori="Sangat Memuaskan";
            }elseif(($ipk>=2.75) && ($ipk<=3.40)){
                $status_kategori="Memuaskan";
            }else{
                $status_kategori="Tidak ditemukan";
            }
            $Status_kategori="Ditemukan";
            break;

    default:
        $status_pilih="$pilih Tidak ditemukan";
        $status_kategori="Tidak ditemukan";
        break;
}


echo "Jenjang Pendidikan =$status_pilih"."<br>";
echo " IPK= $ipk"."<br>";
echo $status;
echo"Predikat = $status_kategori";
?>


