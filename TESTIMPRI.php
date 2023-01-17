<?php
    session_start();
    error_reporting(0);
    include('../includes/dbconn.php');
	include('../includes/logged.php');
    if(strlen($_SESSION['alogin'])==0){   
    }else {  

    //Activated Employee
    if(isset($_GET['id'])){
    $id=$_GET['id'];
	if(isset($_GET['leaveid'])){ // check if leaveid is set
        $lid=$_GET['leaveid'];
    $sql = "select  tblleaves.id as lid from tblleaves,tblemployees  join tblemployees on tblleaves.empid=tblemployees.id";
    $query = $dbh->prepare($sql);
    $query -> bindParam(':id',$id, PDO::PARAM_STR);
    $query->bindParam(':lid', $lid, PDO::PARAM_INT);
    $query -> execute();
    header('location:employees.php');
    }
	}
 ?>
 
 
 <!doctype html>
 
 <html>
 <strong>
   <?php  echo ": رقم الموظف ", "   "; ?>
	<br><?php echo "الإسم و النسب:", "   ",( htmlentities($result->FirstName))," ",(htmlentities($result->LastName));
	?>
	    
</br>

// </strong>
// <body onload="window.print()">
// <script>
// window.onafterprint = function(e){
    // closePrintView();
// };
// function myFunction(){
    // window.print();
// }

// function closePrintView() {
    // window.location.href = 'http://localhost:8000/els/employees/leave-history.php';   
// }
// </script>


</body>
</html>


 <table style="width: 100%;">
    <tbody>
        <tr>
            <td style="width: 33.2907%;">
                <p style="text-align: right;">في: بوعرفة&nbsp;</p>
                <p style="text-align: right;"> الموافق ل:
				<?php
// Return current date from the remote server
$date = date('Y-m-d');
echo $date;
?></p>
<html>
  <head>
    <style>
    body {
        height: 842px;
        width: 595px;
        /* to centre page on screen*/
        margin-left: auto;
        margin-right: auto;
    }
    </style>
  </head>
  <body>
  </body>
</html>

                <div>
                    <p dir="RTL" style="text-align: center;"><br></p>
                </div>
            </td>
            <td style="width: 33.2906%;">
                 <div style="text-align: center;"><strong><span dir="RTL" style='font-size:19px;font-family:"Akhbar MT";'>بسم الله الرحمن الرحيم<br><img src="https://myfiles.space/user_files/138368_cc3776e3e2631e14/138368_custom_files/img1670018155.png" width="70" height="76">&nbsp;</span></strong></div>
            </td>
            <td style="width: 33.3333%;">
                <p style="text-align: center;"><br></p>
                <p style="text-align: center;"><br></p>
                <p style="text-align: center;"><br></p>
                <p style="text-align: center;"><strong><span dir="RTL">المملكة المغربية</span></strong></p>
                <div>
                    <p style="text-align: center;"><strong><span dir="RTL">وزارة الأوقاف والشؤون الإسلامية</span></strong></p>
                    <p style="text-align: center;"><strong><span dir="RTL">المندوبية الإقليــمية للشؤون الإسلامية</span></strong></p>
                    <p dir="RTL" style="text-align: center;">لإقليم فجيج ببوعرفة</p>
                    <p dir="RTL" style="text-align: center;">&nbsp;مكتب الشؤون الدينية</p>
                </div>
                <div>
                    <p dir="RTL" style="text-align: center;"><br></p>
                </div>
                <div>
                    <p dir="RTL" style="text-align: center;"><br></p>
                </div><br>
            </td>
        </tr>
    </tbody>
</table>
<p style="text-align: right;"><br></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;text-indent:-.05pt;'><strong><u><span style='font-size:32px;font-family:"Traditional Arabic",serif;'>طلب الإذن بالتغيب</span></u></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;text-indent:16.35pt;'><strong><span style='font-size:24px;font-family:"Traditional Arabic",serif;'>&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;text-indent:16.35pt;'><strong><span style='font-size:24px;font-family:"Traditional Arabic",serif;'>أنا الموقع أسفله :</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'>&nbsp;</p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;line-height:115%;'><strong><span style='font-size:24px;line-height:115%;font-family:"Traditional Arabic",serif;'>الاسم الشخصي والعائـلي: <td><?php echo htmlentities($result->FirstName);?></td>&nbsp;<?php echo htmlentities($result->LastName);?></td> </span></strong><strong><span style='font-size:19px;line-height:115%;font-family:"Traditional Arabic",serif;'>&nbsp;&nbsp;</span></strong><strong><span style='font-size:19px;line-height:115%;font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:-.05pt;line-height:115%;'><strong><span style='font-size:24px;line-height:115%;font-family:"Traditional Arabic",serif;'>رقم بطاقة التعريف الوطنية: <td><?php echo htmlentities($result->CIN);?></td>&nbsp; &nbsp;</span></strong></p>

<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;line-height:115%;'><strong><span style='font-size:24px;line-height:115%;font-family:"Traditional Arabic",serif;'>المهــــمة (المهـام) :  <td><?php echo htmlentities($result->Department);?></td>
&nbsp; &nbsp;</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;line-height:115%;'><strong><span style='font-size:24px;line-height:115%;font-family:"Traditional Arabic",serif;'>المســــــــجد: &nbsp;&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;line-height:115%;'><strong><span style='font-size:24px;line-height:115%;font-family:"Traditional Arabic",serif;'>عنــوان المســـجد: &nbsp; &nbsp;</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;line-height:115%;'><strong><span style='font-size:24px;line-height:115%;font-family:"Traditional Arabic",serif;'>العنوان الشخـــصي : &nbsp; &nbsp;</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;line-height:115%;'><strong><span style='font-size:24px;line-height:115%;font-family:"Traditional Arabic",serif;'>رقم الهـاتف المحمــول: &nbsp; &nbsp;</span></strong></p>

  
									
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:28.3pt;line-height:115%;'><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>ألتمس من السيد المندوب الإقليمي للشؤون الإسلامية لإقليم فجيج التغيب عن أداء مهمتي (مهامي) المذكورة أعلاه،</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:28.3pt;line-height:115%;'><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>&nbsp;ابتداء من يوم <td><?php echo htmlentities($result->FromDate);?>
&nbsp; &nbsp; </span></strong><strong><span style='font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp;،&nbsp;</span></strong><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>إلى يوم <td><?php echo htmlentities($ToDate);?></td>;&nbsp; &nbsp; &nbsp; &nbsp;</span></strong><strong><span style='font-family:"Traditional Arabic",serif;'><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;،&nbsp;</span></strong><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>بسبب. <td><?php echo htmlentities($result->LeaveType);?></td>&nbsp; &nbsp; &nbsp;</span></strong><strong><span style='font-family:"Traditional Arabic",serif;'>&nbsp; . &nbsp; &nbsp; &nbsp; &nbsp;،&nbsp;</span></strong><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>وأستأنف عملي يوم &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong><strong><span style='font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp;</span></strong><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>، مع تكليف السيد <td><?php echo htmlentities($result->remplacent);?></td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong><strong><span style='font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>،</span></strong><strong><span style='font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></strong><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;صاحب بطاقة التعريف الوطنية ذات الرقم <td><?php echo htmlentities($result->CIN_remplacent);?></td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong><strong><span style='font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp;.</span></strong><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>، لينوب عني فيها، خلال هذه المدة.</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;text-indent:28.3pt;line-height:115%;'><strong><span style='font-size:21px;line-height:115%;font-family:"Traditional Arabic",serif;'>&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;'><strong><u><span style='font-size:24px;font-family:"Traditional Arabic",serif;'>توقيع طاب الإذن&nbsp;&nbsp;</span></u></strong><strong><u><span style='font-size:24px;font-family:"Traditional Arabic",serif;'>:</span></u></strong><strong><span style='font-size:24px;font-family:"Traditional Arabic",serif;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>توقيع المراقب أو الإمام المرشد: <br><br></u> <br>:توقيع النائب عنه</span></u></strong><strong><u><span style='font-size:24px;font-family:"Traditional Arabic",serif;'></span></u></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:center;'><strong><u><span style='font-size:24px;font-family:"Traditional Arabic",serif;'>توقيع</span></u></strong><strong><u><span dir="LTR" style="font-size:24px;">&nbsp;</span></u></strong><strong><u><span style='font-size:24px;font-family:"Traditional Arabic",serif;'>المندوب</span></u></strong><strong><u><span style='font-size:24px;font-family:"Traditional Arabic",serif;'>:</span></u></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:justify;line-height:115%;'><strong><span style='font-size:24px;line-height:115%;font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></strong><strong><span style="font-size:21px;line-height:115%;">&nbsp;</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><strong><u><span style='font-size:27px;font-family:"Traditional Arabic",serif;'>ملحوظة مهمة</span></u></strong><strong><span style='font-size:24px;font-family:"Traditional Arabic",serif;'>:</span></strong></p>
<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><strong><span style='font-size:19px;font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp;- لا يستفيد القيم الديني من التغيب إلا بعد توصل الإمـام المرشد، أو مراقب المساجد التابع له بطلب الإذن به، وإخبار المندوبية به حينا من قبل الإمام المرشد أو مراقب المساجد، وردِّها عليه بالموافقة أو عدم الموافقة.</span></strong></p>
	<p dir="RTL" style='margin:0cm;font-size:16px;font-family:"Times New Roman",serif;text-align:right;'><strong><span style='font-size:19px;font-family:"Traditional Arabic",serif;'>&nbsp; &nbsp;-يبعث هذا الإذن بالتغيب فيما بعد، من قبل الإمام المرشد أو مراقب المساجد، إلى المندوبية ليوضع بملف المعني بالأمر.</span></strong></p>
	</body>
</html>
	</html>
	
	<?php }?>