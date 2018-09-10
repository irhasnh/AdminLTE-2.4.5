# AdminLTE-2.4.5
Template Codeigniter AdminLTE-2.4.5 

Cara pemanggilan Plugin di Controller

 * DATA PLUGIN  & pemanggilan
 * chart/grafik = PLUG_CHART
 * datatable    = PLUG_DATATABLE
 * checkbox     = PLUG_CHECKBOX
 * dropdown     = PLUG_DROPDOWN
 * date/tanggal = PLUG_DATE
 * daterange    = PLUG_DATERANGE
 * textarea_word= PLUG_TEXTAREA
 * time/jam     = PLUG_TIME
 *_-----------------------------------------------------------------------------------
 * cara memanggil plugin lebih dari satu : $data['plugins'] = [PLUG_CHART , PLUG_DATATABLE , PLUG_DROPDOWN ]; 
 * cara memanggil 1 plugin               : $data['plugins'] = [PLUG_CHART]; 
 * jika tidak menggunakan plugin         : $data['plugins'] = [];
 
 
 Setingan plugin di constanta
 
 * defined('PLUG_CHART')     OR define('PLUG_CHART', 'chart');
 * defined('PLUG_DATATABLE') OR define('PLUG_DATATABLE', 'datatable');
 * defined('PLUG_CHECKBOX')  OR define('PLUG_CHECKBOX', 'checkbox');
 * defined('PLUG_DROPDOWN')  OR define('PLUG_DROPDOWN', 'dropdown');
 * defined('PLUG_DATE')      OR define('PLUG_DATE', 'date');
 * defined('PLUG_DATERANGE') OR define('PLUG_DATERANGE', 'daterange');
 * defined('PLUG_TEXTAREA')  OR define('PLUG_TEXTAREA', 'textarea_word');
 * defined('PLUG_TIME')      OR define('PLUG_TIME', 'time');
 
 Setinga Nama Aplikasi di constanta
* defined('APP_NAME')       OR define('APP_NAME', 'NameCompany');
* defined('COPY_RIGHT')     OR define('COPY_RIGHT', '<strong >Copyright &copy; '.date('Y').' '.APP_NAME.'</strong>. All rights reserved.');
* defined('APP_VERSION')    OR define('APP_VERSION', '1.0.0');

Pemanggilan di view
* echo COPY_RIGHT
  
 







