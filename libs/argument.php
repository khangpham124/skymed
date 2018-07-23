<?php
$pagename = str_replace(array('/', '.php', '?s='), '', $_SERVER['REQUEST_URI']); 
$pagename = $pagename ? $pagename : 'default'; 

switch ($pagename) {
    case "aboutus":
			if(!isset($titlepage)) $titlepage = "About us title";
			if(!isset($desPage)) $desPage = "";
			if(!isset($keyPage)) $keyPage = "";
			if(!isset($txtH1)) $txtH1 = "H1 content for about us";
        break;   
    default:
			if(!isset($titlepage)) $titlepage = "Skymed Asia Services | Air Ambulance Medical Evacuation";
			if(!isset($desPage)) $desPage = "SKYMED ASIA SERVICES (SKYMED ASIA), specialize in Air Ambulance & Medical Tourism Services in Asia Pacific, were established in 2015 in Thailand.";
			if(!isset($keyPage)) $keyPage = "";
			if(!isset($txtH1)) $txtH1 = "H1 Default";
}

// HEADER
$textPhone_eng = '24-hr Emergency Hotline';
$textPhone_thai = '24-hr สายด่วนฉุกเฉิน';
$textPhone_viet = 'Đường dây nóng 24h';
$textPhone_china = '24-hr 紧急热线';

$v_phone = $lang_web.'_phone';
if(($v_phone=='thai_phone')||($v_phone=='viet_phone')) {
	$phoneNumb = get_field($v_phone,$post_info->ID);
} else {
	$phoneNumb = get_field('thai_phone',$post_info->ID);
}

$menu_list_eng = array('Home'=>'','About Us'=>'about/','Services'=>'services/','Air Ambulance Fleet'=>'air-ambulance-fleet/','Safety First'=>'safety-first/','FAQs'=>'faq/');
$menu_list_thai = array('หน้าหลัก'=>'','เกี่ยวกับเรา'=>'about/','บริการ'=>'services/','อากาศพยาบาล'=>'air-ambulance-fleet/','ปลอดภัยไว้ก่อน'=>'safety-first/','FAQs'=>'faq/');
$menu_list_viet = array('Trang chủ'=>'','Về chúng tôi'=>'about/','Dịch vụ'=>'services/','Máy bay cấp cứu'=>'air-ambulance-fleet/','Tiêu chuẩn an toàn'=>'safety-first/','Hỏi đáp'=>'faq/');
$menu_list_china = array('Home china'=>'','关于我们'=>'about/','Services'=>'services/','Air'=>'air-ambulance-fleet/','Safety'=>'safety-first/','Faq'=>'faq/');

//TOP PAGE
$hTitle_eng = 'About Us';
$hTitle_thai = 'เกี่ยวกับเรา';
$hTitle_viet = 'Về chúng tôi';
$hTitle_china = '关于我们';

$hTitleServices_eng = 'Services';
$hTitleServices_thai = 'บริการ';
$hTitleServices_viet = 'Dịch vụ';
$hTitleServices_china = '服务';

$hTitlePartner_eng = 'Our Partners';
$hTitlePartner_thai = 'พันธมิตรของเรา';
$hTitlePartner_viet = 'Đối tác của chúng tôi';
$hTitlePartner_china = '我们的伙伴';

$txtLarge_eng = 'Always ON, wherever!';
$txtLarge_thai = 'เสมอไปทุกที่!';
$txtLarge_viet = 'Always ON, wherever!';
$txtLarge_china = '无论何时何地，永远在线！';

$txtSmall_eng = 'Asia’s air ambulance<br>and medical evacuation (medevac) specialist';
$txtSmall_thai = 'Asia’s air ambulance<br>and medical evacuation (medevac) specialist';
$txtSmall_viet = 'Asia’s air ambulance<br>and medical evacuation (medevac) specialist';
$txtSmall_china = 'Asia’s air ambulance<br>and medical evacuation (medevac) specialist';

//FOOTER
$titelFooter_eng = 'Contact Us';
$titelFooter_thai = 'ติดต่อเรา';
$titelFooter_viet = 'Liên hệ với chúng tôi';
$titelFooter_china = '联系我们';

$phName_eng = 'Fullname';
$phName_thai = 'ชื่อเต็ม';
$phName_viet = 'Họ tên';
$phName_china = '全名';

$phMail_eng = 'Email';
$phMail_thai = 'อีเมล';
$phMail_viet = 'Email';
$phMail_china = '电子邮件';

$phPhone_eng = 'Phone';
$phPhone_thai = 'หมายเลขโทรศัพท์';
$phPhone_viet = 'Số điện thoại';
$phPhone_china = '电话号码';

$phMess_eng = 'Message';
$phMess_thai = 'เนื้อหา';
$phMess_viet = 'Nội dung';
$phMess_china = '内容';


//BUTTON
$btnMore_eng = 'MORE';
$btnMore_thai = 'อ่านเพิ่มเติม';
$btnMore_viet = 'XEM THÊM';
$btnMore_china = '阅读更多';

$btnSend_eng = 'SEND';
$btnSend_thai = 'ส่ง';
$btnSend_viet = 'GỬI';
$btnSend_china = '发送';

// TEXT COMMON 
$txt_home_eng = 'HOME';
$txt_home_thai = 'หน้าแรก';
$txt_home_viet = 'Trang chủ';
$txt_home_china = '主页';

$txt_about_eng = 'ABOUT US';
$txt_about_thai = 'เกี่ยวกับเรา';
$txt_about_viet = 'Về chúng tôi';
$txt_about_china = '关于我们';

$txt_services_eng = 'Services';
$txt_services_thai = 'บริการ';
$txt_services_viet = 'Dịch vụ';
$txt_services_china = '服务';

$txt_safety_eng = 'Safety First';
$txt_safety_thai = 'ปลอดภัยไว้ก่อน';
$txt_safety_viet = 'Tiêu chuẩn an tòan';
$txt_safety_china = '安全第一';

//ABOUT PAGE
$tab_companyInfo_eng = 'COMPANY PROFILE';
$tab_companyInfo_thai = 'ประวัติ บริษัท';
$tab_companyInfo_viet = 'VỀ CÔNG TY';
$tab_companyInfo_china = '公司简介';

$tab_medical_eng = 'MEDICAL TEAM';
$tab_medical_thai = 'ทีมแพทย์';
$tab_medical_viet = 'ĐỘI NGŨ Y TẾ';
$tab_medical_china = '医疗团队';

$tab_air_eng = 'AIR AMBULANCE FLEET';
$tab_air_thai = 'AIR AMBULANCE FLEET';
$tab_air_viet = 'MÁY BAY CẤP CỨU';
$tab_air_china = 'AIR AMBULANCE FLEET';

$h4_mile_eng = 'Company Milestone';
$h4_mile_thai = 'ประวัติความเป็นมาของ บริษัท';
$h4_mile_viet = 'Các cột mốc về công ty';
$h4_mile_china = '公司里程碑';

$h4_loc_eng = 'Location';
$h4_loc_thai = 'ที่ตั้ง';
$h4_loc_viet = 'Văn phòng';
$h4_loc_china = '位置';

$h4_exp_eng = 'Expert';
$h4_exp_thai = 'ผู้เชี่ยวชาญ';
$h4_exp_viet = 'Chuyên gia';
$h4_exp_china = '专家';

//SERVICES PAGE

$tab_overall_eng = 'Overall';
$tab_overall_thai = 'ทั้งหมด';
$tab_overall_viet = 'Tổng quan';
$tab_overall_china = '总体';

$tab_air_eng = 'Air Services';
$tab_air_thai = 'Air Services';
$tab_air_viet = 'Dịch vụ hàng không';
$tab_air_china = '航空服务';

$tab_ambulance_eng = 'Air Ambulance';
$tab_ambulance_thai = 'รถพยาบาลอากาศ';
$tab_ambulance_viet = 'Máy bay cấp cứu';
$tab_ambulance_china = '空中救护车';

$tab_escort_eng = 'Commercial medical escort';
$tab_escort_thai = 'พาณิชยการทางการแพทย์พิทักษ์';
$tab_escort_viet = 'Hộ tống y tế thương mại';
$tab_escort_china = '商业医疗护送';

$tab_organ_eng = 'Organ transport';
$tab_organ_thai = 'การขนส่งอวัยวะ';
$tab_organ_viet = 'Vận chuyển nội tạng';
$tab_organ_china = '器官运输';

$tab_tour_eng = 'Medical Tourism';
$tab_tour_thai = 'การท่องเที่ยวทางการแพทย์';
$tab_tour_viet = 'Du lịch y tế';
$tab_tour_china = '医疗旅游';

//CONTACT BOX
$title_contact_eng = 'Inquiries';
$title_contact_thai = 'สอบถามข้อมูล';
$title_contact_viet = 'Tư ván dịch vụ';
$title_contact_china = '查询';

$label_call_eng = 'Call Center (24 hours)';
$label_call_thai = 'ศูนย์บริการ';
$label_call_viet = 'Hotline (24h)';
$label_call_china = '呼叫中心';

$txt_sl_eng = 'Please chose a service';
$txt_sl_thai = 'โปรดเลือกบริการ';
$txt_sl_viet = 'Vui lòng dịch vụ mong muốn';
$txt_sl_china = '请选择一项服务';

$title_form_eng = 'Please tell us your request by filling out the below form or directly call us';
$title_form_thai = 'โปรดแจ้งให้เราทราบถึงคำขอของคุณโดยกรอกแบบฟอร์มด้านล่างหรือโทรหาเราโดยตรง';
$title_form_viet = 'Vui lòng cho chúng tôi biết yêu cầu của bạn bằng cách điền vào biểu mẫu dưới đây hoặc gọi trực tiếp cho chúng tôi';
$title_form_china = '请填写下面的表格告诉我们您的要求或直接致电我们';

?>