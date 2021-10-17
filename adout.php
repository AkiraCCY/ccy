<?php
session_start();
include('navbar_member.php');
include('link.php');
$m_id = $_SESSION['member_id'];
?>

<div class="container">
  <div class="content">
    <h1>ร้านตี๋การช่าง </h1>
    <h3>นายวีระสันต์ ศุภวิมลพันธุ์  ที่อยู่ 279 หมู่ 13 ตำบลจอหอ อำเภอเมือง จังหวัดนครราชสีมา เปิดให้บริการตั้งแต่ 08.00 น. ถึงเวลา 17.00 น. เบอร์โทรติดต่อ 0819766698 เป็นร้านขายอะไหล่รถจักรยานยนต์ทุกประเภท </h3>
  </div>
  
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300;900&display=swap');

body {
  background: #f2f2f2;
}

.container  {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  height: 70%;
  width: 100%;
  background: #f2f2f2;
  overflow: hidden;
  border-radius: 20px;
  cursor: pointer;
  box-shadow: 0 0 20px 8px #d0d0d0;
}

.content {
  position: absolute;
  top: 50%;
  transform: translatey(-50%);
  text-align: justify;
  color: black;
  padding: 40px;
  font-family: 'Merriweather', serif;
}

h1 {
  font-weight: 900;
  text-align: center;
}

h3 {
  font-weight: 300;
}


</style>