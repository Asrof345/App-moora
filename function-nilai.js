function sisaFunction(){
    var sisaJ1         = document.getElementById("sisaJ1").value;
    var nilaiInputJ1   = document.getElementById("nilaiInputJ1").value;
    var fixedInputJ1   = document.getElementById("fixedInputJ1").value;
    var jumlahInputJ1  = document.getElementById("jumlahInputJ1").value  = fixedInputJ1 - nilaiInputJ1;
    var fixedTotalJ1   = document.getElementById("fixedTotalJ1").value ;
    var totalJ1        = document.getElementById("totalJ1").value = fixedTotalJ1 - jumlahInputJ1 ;
    
    var minusTermJ1 = Number(sisaJ1) + Number(jumlahInputJ1) ; 
    if(totalJ1>100){
        document.getElementById("btnSimpanJ1").disabled = true;
        document.getElementById("infoMaxJ1").innerHTML = "Ups, nilai sudah max, kurangkan <" + minusTermJ1;

    } else if (totalJ1<=100) {
        document.getElementById("btnSimpanJ1").disabled = false;
        document.getElementById("infoMaxJ1").innerHTML = "";

    }

    var sisaJ2         = document.getElementById("sisaJ2").value;
    var nilaiInputJ2   = document.getElementById("nilaiInputJ2").value;
    var fixedInputJ2   = document.getElementById("fixedInputJ2").value;
    var jumlahInputJ2  = document.getElementById("jumlahInputJ2").value  = fixedInputJ2 - nilaiInputJ2;
    var fixedTotalJ2   = document.getElementById("fixedTotalJ2").value ;
    var totalJ2        = document.getElementById("totalJ2").value = fixedTotalJ2 - jumlahInputJ2 ;
    
    var minusTermJ2 = Number(sisaJ2) + Number(jumlahInputJ2) ; 
    if(totalJ2>100){
        document.getElementById("btnSimpanJ2").disabled = true;
        document.getElementById("infoMaxJ2").innerHTML = "Ups, nilai sudah max, kurangkan <" + minusTermJ2;

    } else if (totalJ2<=100) {
        document.getElementById("btnSimpanJ2").disabled = false;
        document.getElementById("infoMaxJ2").innerHTML = "";

    }

    var sisaJ3         = document.getElementById("sisaJ3").value;
    var nilaiInputJ3   = document.getElementById("nilaiInputJ3").value;
    var fixedInputJ3   = document.getElementById("fixedInputJ3").value;
    var jumlahInputJ3  = document.getElementById("jumlahInputJ3").value  = fixedInputJ3 - nilaiInputJ3;
    var fixedTotalJ3   = document.getElementById("fixedTotalJ3").value ;
    var totalJ3        = document.getElementById("totalJ3").value = fixedTotalJ3 - jumlahInputJ3 ;
    
    var minusTermJ3 = Number(sisaJ3) + Number(jumlahInputJ3) ; 
    if(totalJ3>100){
        document.getElementById("btnSimpanJ3").disabled = true;
        document.getElementById("infoMaxJ3").innerHTML = "Ups, nilai sudah max, kurangkan <" + minusTermJ3;

    } else if (totalJ3<=100) {
        document.getElementById("btnSimpanJ3").disabled = false;
        document.getElementById("infoMaxJ3").innerHTML = "";

    }

    var sisaJ4         = document.getElementById("sisaJ4").value;
    var nilaiInputJ4   = document.getElementById("nilaiInputJ4").value;
    var fixedInputJ4   = document.getElementById("fixedInputJ4").value;
    var jumlahInputJ4  = document.getElementById("jumlahInputJ4").value  = fixedInputJ4 - nilaiInputJ4;
    var fixedTotalJ4   = document.getElementById("fixedTotalJ4").value ;
    var totalJ4        = document.getElementById("totalJ4").value = fixedTotalJ4 - jumlahInputJ4 ;
    
    var minusTermJ4 = Number(sisaJ4) + Number(jumlahInputJ4) ; 
    if(totalJ4>100){
        document.getElementById("btnSimpanJ4").disabled = true;
        document.getElementById("infoMaxJ4").innerHTML = "Ups, nilai sudah max, kurangkan <" + minusTermJ4;

    } else if (totalJ4<=100) {
        document.getElementById("btnSimpanJ4").disabled = false;
        document.getElementById("infoMaxJ4").innerHTML = "";

    }

    var sisaJ5         = document.getElementById("sisaJ5").value;
    var nilaiInputJ5   = document.getElementById("nilaiInputJ5").value;
    var fixedInputJ5   = document.getElementById("fixedInputJ5").value;
    var jumlahInputJ5  = document.getElementById("jumlahInputJ5").value  = fixedInputJ5 - nilaiInputJ5;
    var fixedTotalJ5   = document.getElementById("fixedTotalJ5").value ;
    var totalJ5        = document.getElementById("totalJ5").value = fixedTotalJ5 - jumlahInputJ5 ;
    
    var minusTermJ5 = Number(sisaJ5) + Number(jumlahInputJ5) ; 
    if(totalJ5>100){
        document.getElementById("btnSimpanJ5").disabled = true;
        document.getElementById("infoMaxJ5").innerHTML = "Ups, nilai sudah max, kurangkan <" + minusTermJ5;

    } else if (totalJ5<=100) {
        document.getElementById("btnSimpanJ5").disabled = false;
        document.getElementById("infoMaxJ5").innerHTML = "";

    }

    

}