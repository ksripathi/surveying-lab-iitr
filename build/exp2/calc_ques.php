<?php ob_start(); ?>
<?php
global $count;
global $count2;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Virtual Labs - IIT Roorkee</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="javascript/jquery.simplemodal.js"></script>
<script type="text/javascript" src="javascript/init.js"></script>
<!--<link type='text/css' href='style/stylesheet.css' rel='stylesheet' media='screen' />-->
        </head>
       
<?php


if($_POST["sub"] == 1)
{

if($_POST["q1"]== "d")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "e")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q3"]== "e")
{
   echo ("("."3".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q3"]!=NULL)
{
   echo ("("."3".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q4"]== "c")
{
   echo ("("."4".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q4"]!=NULL)
{
   echo ("("."4".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q5"]== "a")
{
   echo ("("."5".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q5"]!=NULL)
{
   echo ("("."5".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q6"]== "e")
{
   echo ("("."6".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q6"]!=NULL)
{
   echo ("("."6".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q7"]== "c")
{
   echo ("("."7".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q7"]!=NULL)
{
   echo ("("."7".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q8"]== "a")
{
   echo ("("."8".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q8"]!=NULL)
{
   echo ("("."8".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q9"]== "a")
{
   echo ("("."9".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q9"]!=NULL)
{
   echo ("("."9".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q10"]== "a")
{
   echo ("("."10".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q10"]!=NULL)
{
   echo ("("."10".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q11"]== "a")
{
   echo ("("."11".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q11"]!=NULL)
{
   echo ("("."11".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}
}









elseif($_POST["sub"] == 2)
{
;
if($_POST["q1"]== "c")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "d")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q3"]== "e")
{
   echo ("("."3".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q3"]!=NULL)
{
   echo ("("."3".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q4"]== "e")
{
   echo ("("."4".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q4"]!=NULL)
{
   echo ("("."4".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q5"]== "c")
{
   echo ("("."5".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q5"]!=NULL)
{
   echo ("("."5".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q6"]== "a")
{
   echo ("("."6".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q6"]!=NULL)
{
   echo ("("."6".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q7"]== "d")
{
   echo ("("."7".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q7"]!=NULL)
{
   echo ("("."7".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q8"]== "c")
{
   echo ("("."8".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q8"]!=NULL)
{
   echo ("("."8".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q9"]== "a")
{
   echo ("("."9".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q9"]!=NULL)
{
   echo ("("."9".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q10"]== "a")
{
   echo ("("."10".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q10"]!=NULL)
{
   echo ("("."10".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q11"]== "a")
{
   echo ("("."11".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q11"]!=NULL)
{
   echo ("("."11".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q12"]== "c")
{
   echo ("("."12".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q12"]!=NULL)
{
   echo ("("."12".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q13"]== "d")
{
   echo ("("."13".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q13"]!=NULL)
{
   echo ("("."13".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q14"]== "d")
{
   echo ("("."14".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q14"]!=NULL)
{
   echo ("("."14".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q15"]== "e")
{
   echo ("("."15".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q15"]!=NULL)
{
   echo ("("."15".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q16"]== "d")
{
   echo ("("."16".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q16"]!=NULL)
{
   echo ("("."16".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q17"]== "a")
{
   echo ("("."17".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q17"]!=NULL)
{
   echo ("("."17".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q18"]== "b")
{
   echo ("("."18".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q18"]!=NULL)
{
   echo ("("."18".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}

}









elseif($_POST["sub"] == 3)
{
;
if($_POST["q1"]== "c")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "e")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q3"]== "e")
{
   echo ("("."3".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q3"]!=NULL)
{
   echo ("("."3".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q4"]== "a")
{
   echo ("("."4".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q4"]!=NULL)
{
   echo ("("."4".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q5"]== "c")
{
   echo ("("."5".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q5"]!=NULL)
{
   echo ("("."5".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q6"]== "c")
{
   echo ("("."6".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q6"]!=NULL)
{
   echo ("("."6".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q7"]== "b")
{
   echo ("("."7".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q7"]!=NULL)
{
   echo ("("."7".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q8"]== "a")
{
   echo ("("."8".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q8"]!=NULL)
{
   echo ("("."8".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q9"]== "a")
{
   echo ("("."9".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q9"]!=NULL)
{
   echo ("("."9".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q10"]== "a")
{
   echo ("("."10".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q10"]!=NULL)
{
   echo ("("."10".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q11"]== "a")
{
   echo ("("."11".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q11"]!=NULL)
{
   echo ("("."11".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q12"]== "c")
{
   echo ("("."12".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q12"]!=NULL)
{
   echo ("("."12".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q13"]== "d")
{
   echo ("("."13".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q13"]!=NULL)
{
   echo ("("."13".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q14"]== "d")
{
   echo ("("."14".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q14"]!=NULL)
{
   echo ("("."14".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q15"]== "e")
{
   echo ("("."15".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q15"]!=NULL)
{
   echo ("("."15".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q16"]== "d")
{
   echo ("("."16".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q16"]!=NULL)
{
   echo ("("."16".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q17"]== "a")
{
   echo ("("."17".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q17"]!=NULL)
{
   echo ("("."17".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q18"]== "b")
{
   echo ("("."18".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q18"]!=NULL)
{
   echo ("("."18".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q19"]== "c")
{
   echo ("("."19".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q19"]!=NULL)
{
   echo ("("."19".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}

}









elseif($_POST["sub"] == 4)
{
;
if($_POST["q1"]== "d")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "d")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q3"]== "a")
{
   echo ("("."3".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q3"]!=NULL)
{
   echo ("("."3".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q4"]== "a")
{
   echo ("("."4".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q4"]!=NULL)
{
   echo ("("."4".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q5"]== "e")
{
   echo ("("."5".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q5"]!=NULL)
{
   echo ("("."5".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q6"]== "c")
{
   echo ("("."6".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q6"]!=NULL)
{
   echo ("("."6".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q7"]== "e")
{
   echo ("("."7".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q7"]!=NULL)
{
   echo ("("."7".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q8"]== "e")
{
   echo ("("."8".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q8"]!=NULL)
{
   echo ("("."8".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q9"]== "e")
{
   echo ("("."9".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q9"]!=NULL)
{
   echo ("("."9".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q10"]== "e")
{
   echo ("("."10".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q10"]!=NULL)
{
   echo ("("."10".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q11"]== "a")
{
   echo ("("."11".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q11"]!=NULL)
{
   echo ("("."11".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q12"]== "d")
{
   echo ("("."12".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q12"]!=NULL)
{
   echo ("("."12".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q13"]== "b")
{
   echo ("("."13".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q13"]!=NULL)
{
   echo ("("."13".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q14"]== "c")
{
   echo ("("."14".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q14"]!=NULL)
{
   echo ("("."14".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}
}









elseif($_POST["sub"] == 5)
{
;
if($_POST["q1"]== "e")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "a")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q3"]== "b")
{
   echo ("("."3".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q3"]!=NULL)
{
   echo ("("."3".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q4"]== "e")
{
   echo ("("."4".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q4"]!=NULL)
{
   echo ("("."4".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q5"]== "c")
{
   echo ("("."5".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q5"]!=NULL)
{
   echo ("("."5".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q6"]== "a")
{
   echo ("("."6".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q6"]!=NULL)
{
   echo ("("."6".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q7"]== "b")
{
   echo ("("."7".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q7"]!=NULL)
{
   echo ("("."7".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q8"]== "c")
{
   echo ("("."8".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q8"]!=NULL)
{
   echo ("("."8".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q9"]== "a")
{
   echo ("("."9".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q9"]!=NULL)
{
   echo ("("."9".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q10"]== "a")
{
   echo ("("."10".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q10"]!=NULL)
{
   echo ("("."10".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q11"]== "c")
{
   echo ("("."11".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q11"]!=NULL)
{
   echo ("("."11".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q12"]== "e")
{
   echo ("("."12".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q12"]!=NULL)
{
   echo ("("."12".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q13"]== "a")
{
   echo ("("."13".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q13"]!=NULL)
{
   echo ("("."13".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q14"]== "a")
{
   echo ("("."14".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q14"]!=NULL)
{
   echo ("("."14".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}

}










elseif($_POST["sub"] == 6)
{
;
if($_POST["q1"]== "e")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "e")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q3"]== "a")
{
   echo ("("."3".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q3"]!=NULL)
{
   echo ("("."3".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q4"]== "d")
{
   echo ("("."4".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q4"]!=NULL)
{
   echo ("("."4".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q5"]== "a")
{
   echo ("("."5".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q5"]!=NULL)
{
   echo ("("."5".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}

}










elseif($_POST["sub"] == 7)
{
;
if($_POST["q1"]== "e")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "a")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q3"]== "a")
{
   echo ("("."3".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q3"]!=NULL)
{
   echo ("("."3".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q4"]== "d")
{
   echo ("("."4".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q4"]!=NULL)
{
   echo ("("."4".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q5"]== "d")
{
   echo ("("."5".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q5"]!=NULL)
{
   echo ("("."5".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q6"]== "c")
{
   echo ("("."6".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q6"]!=NULL)
{
   echo ("("."6".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q7"]== "d")
{
   echo ("("."7".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q7"]!=NULL)
{
   echo ("("."7".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q8"]== "c")
{
   echo ("("."8".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q8"]!=NULL)
{
   echo ("("."8".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q9"]== "a")
{
   echo ("("."9".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q9"]!=NULL)
{
   echo ("("."9".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q10"]== "c")
{
   echo ("("."10".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q10"]!=NULL)
{
   echo ("("."10".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}

}










elseif($_POST["sub"] == 8)
{
;
if($_POST["q1"]== "d")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "a")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q3"]== "e")
{
   echo ("("."3".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q3"]!=NULL)
{
   echo ("("."3".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q4"]== "c")
{
   echo ("("."4".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q4"]!=NULL)
{
   echo ("("."4".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q5"]== "a")
{
   echo ("("."5".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q5"]!=NULL)
{
   echo ("("."5".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q6"]== "d")
{
   echo ("("."6".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q6"]!=NULL)
{
   echo ("("."6".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q7"]== "e")
{
   echo ("("."7".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q7"]!=NULL)
{
   echo ("("."7".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q8"]== "c")
{
   echo ("("."8".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q8"]!=NULL)
{
   echo ("("."8".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q9"]== "c")
{
   echo ("("."9".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q9"]!=NULL)
{
   echo ("("."9".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q10"]== "e")
{
   echo ("("."10".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q10"]!=NULL)
{
   echo ("("."10".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q11"]== "a")
{
   echo ("("."11".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q11"]!=NULL)
{
   echo ("("."11".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q12"]== "c")
{
   echo ("("."12".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q12"]!=NULL)
{
   echo ("("."12".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q13"]== "d")
{
   echo ("("."13".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q13"]!=NULL)
{
   echo ("("."13".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q14"]== "d")
{
   echo ("("."14".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q14"]!=NULL)
{
   echo ("("."14".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q15"]== "e")
{
   echo ("("."15".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q15"]!=NULL)
{
   echo ("("."15".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q16"]== "d")
{
   echo ("("."16".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q16"]!=NULL)
{
   echo ("("."16".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q17"]== "a")
{
   echo ("("."17".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q17"]!=NULL)
{
   echo ("("."17".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q18"]== "b")
{
   echo ("("."18".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q18"]!=NULL)
{
   echo ("("."18".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q19"]== "c")
{
   echo ("("."19".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q19"]!=NULL)
{
   echo ("("."19".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q20"]== "c")
{
   echo ("("."20".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q20"]!=NULL)
{
   echo ("("."20".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}



if($_POST["q21"]== "b")
{
   echo ("("."21".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q21"]!=NULL)
{
   echo ("("."21".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}

}









elseif($_POST["sub"] == 9)
{
;
if($_POST["q1"]== "a")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "c")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}

}









elseif($_POST["sub"] == 10)
{
;
if($_POST["q1"]== "a")
{
   echo ("("."1".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q1"]!=NULL)
{
   echo ("("."1".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}


if($_POST["q2"]== "c")
{
   echo ("("."2".")"."&nbsp"."Right");
   $count=$count+1; echo("<br>");
}
elseif($_POST["q2"]!=NULL)
{
   echo ("("."2".")"."&nbsp"."Wrong");
   $count2++; echo("<br>");
}

}








































/*for($i=1;$i<=45;$i++)
{
   if(($_POST["q".$i]== "a")&&($_POST["q".$i]!="\0"))
   {
      echo ("(".$i.")"."&nbsp".$_POST["q".$i]);
      
      $count=$count+1;
   }
   elseif(($_POST["q".$i]== "b")&&($_POST["q".$i]!="\0"))
   {
      echo ("(".$i.")"."&nbsp".$_POST["q".$i]);
      $count=$count+1;
   }
   elseif(($_POST["q".$i]== "c")&&($_POST["q".$i]!="\0"))
   {
      echo ("(".$i.")"."&nbsp".$_POST["q".$i]);
      $count=$count+1;
   }
   elseif(($_POST["q".$i]== "d")&&($_POST["q".$i]!="\0"))
   {
      echo ("(".$i.")"."&nbsp".$_POST["q".$i]);
      $count=$count+1;
   }
   elseif(($_POST["q".$i]== "e")&&($_POST["q".$i]!="\0"))
   {
      echo ("(".$i.")"."&nbsp".$_POST["q".$i]);
      $count=$count+1;
   }
   echo("</br>");
}*/

echo("<br><br>Right answers are ".$count."<br>");
echo("Wrong answers are ".$count2);



/*
if(($_POST["q2"]== "a")&&($_POST["q2"]!='\0'))
{
echo ("2 ".$_POST["q2"]);
$count=$count+1;
echo ("<br>Count: ".$count);
}
echo("</br>");
if(($_POST["q3"]== "a")&&($_POST["q3"]!='\0'))
{
echo ("3 ".$_POST["q3"]);
$count=$count+1;
echo ("<br>Count: ".$count);
}
echo("</br>");
if(($_POST["q4"]== "a")&&($_POST["q4"]!='\0'))
{
echo ("4 ".$_POST["q4"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q5"]== "a")&&($_POST["q5"]!='\0'))
{
echo ("5 ".$_POST["q5"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q6"]== "a")&&($_POST["q6"]!='\0'))
{
echo ("6 ".$_POST["q6"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q7"]== "a")&&($_POST["q7"]!='\0'))
{
echo ("7 ".$_POST["q7"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q8"]== "a")&&($_POST["q8"]!='\0'))
{
echo ("8 ".$_POST["q8"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q9"]== "a")&&($_POST["q9"]!='\0'))
{
echo ("9 ".$_POST["q9"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q10"]== "a")&&($_POST["q10"]!='\0'))
{
echo ("10 ".$_POST["q10"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q11"]== "a")&&($_POST["q11"]!='\0'))
{
echo ("11 ".$_POST["q11"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q12"]== "a")&&($_POST["q12"]!='\0'))
{
echo ("12 ".$_POST["q12"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q13"]== "a")&&($_POST["q13"]!='\0'))
{
echo ("13 ".$_POST["q13"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q14"]== "a")&&($_POST["q14"]!='\0'))
{
echo ("14 ".$_POST["q14"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q15"]== "a")&&($_POST["q15"]!='\0'))
{
echo ("15 ".$_POST["q15"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q16"]== "a")&&($_POST["q16"]!='\0'))
{
echo ("16 ".$_POST["q16"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q17"]== "a")&&($_POST["q17"]!='\0'))
{
echo ("17 ".$_POST["q17"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q18"]== "a")&&($_POST["q18"]!='\0'))
{
echo ("18 ".$_POST["q18"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q19"]== "a")&&($_POST["q19"]!='\0'))
{
echo ("19 ".$_POST["q19"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q20"]== "a")&&($_POST["q20"]!='\0'))
{
echo ("20 ".$_POST["q20"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q21"]== "a")&&($_POST["q21"]!='\0'))
{
echo ("21 ".$_POST["q21"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q22"]== "a")&&($_POST["q22"]!='\0'))
{
echo ("22 ".$_POST["q22"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q23"]== "a")&&($_POST["q23"]!='\0'))
{
echo ("23 ".$_POST["q23"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q24"]== "a")&&($_POST["q24"]!='\0'))
{
echo ("24 ".$_POST["q24"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q25"]== "a")&&($_POST["q25"]!='\0'))
{
echo ("25 ".$_POST["q25"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q26"]== "a")&&($_POST["q26"]!='\0'))
{
echo ("26 ".$_POST["q26"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q27"]== "a")&&($_POST["q27"]!='\0'))
{
echo ("27 ".$_POST["q27"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q28"]== "a")&&($_POST["q28"]!='\0'))
{
echo ("28 ".$_POST["q28"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q29"]== "a")&&($_POST["q29"]!='\0'))
{
echo ("29 ".$_POST["q29"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q30"]== "a")&&($_POST["q30"]!='\0'))
{
echo ("30 ".$_POST["q30"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q31"]== "a")&&($_POST["q31"]!='\0'))
{
echo ("31 ".$_POST["q31"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q32"]== "a")&&($_POST["q32"]!='\0'))
{
echo ("32 ".$_POST["q32"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q33"]== "a")&&($_POST["q33"]!='\0'))
{
echo ("33 ".$_POST["q33"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q34"]== "a")&&($_POST["q34"]!='\0'))
{
echo ("34 ".$_POST["q34"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q35"]== "a")&&($_POST["q35"]!='\0'))
{
echo ("35 ".$_POST["q35"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q36"]== "a")&&($_POST["q36"]!='\0'))
{
echo ("36 ".$_POST["q36"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q37"]== "a")&&($_POST["q37"]!='\0'))
{
echo ("37 ".$_POST["q37"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q38"]== "a")&&($_POST["q38"]!='\0'))
{
echo ("38 ".$_POST["q38"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q39"]== "a")&&($_POST["q39"]!='\0'))
{
echo ("39 ".$_POST["q39"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q40"]== "a")&&($_POST["q40"]!='\0'))
{
echo ("40 ".$_POST["q40"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q41"]== "a")&&($_POST["q41"]!='\0'))
{
echo ("41 ".$_POST["q41"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q42"]== "a")&&($_POST["q42"]!='\0'))
{
echo ("42 ".$_POST["q42"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q43"]== "a")&&($_POST["q43"]!='\0'))
{
echo ("43 ".$_POST["q43"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q44"]== "a")&&($_POST["q44"]!='\0'))
{
echo ("44 ".$_POST["q44"]);
$count=$count+1;
}
echo("</br>");
if(($_POST["q45"]== "a")&&($_POST["q45"]!='\0'))
{
echo ("45 ".$_POST["q45"]);
$count=$count+1;
}*/


?>





    <br />
        





</div>


<!-- end #content -->
<div id="sidebar"> </div>
</div>
</div>
</div>
<div id="footer">
</div>
   <!-- end #footer -->
</div>
</body>
</html>
