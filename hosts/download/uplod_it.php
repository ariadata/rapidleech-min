<?php if(!defined('RAPIDLEECH')){require_once('index.html');exit();}if(!file_exists(HOST_DIR.'download/GenericXFS_DL.php'))html_error('Cannot load "'.htmlentities(HOST_DIR).'download/GenericXFS_DL.php" (File doesn\'t exists)');require_once(HOST_DIR.'download/GenericXFS_DL.php');class uploadex_com extends GenericXFS_DL{ public $pluginVer=8; public function Download($link){$this->wwwDomain=false;$this->cname='xfss';$this->sslLogin=false;$this->embedDL=false;$this->unescaper=false;$this->Start($link);} public function RedirectDownload($link,$FileName=0,$cookie=0,$post=0,$referer=0,$force_name=0,$auth=0,$addon=array()){$link=parse_url($link);$link['scheme']='http';$link=rebuild_url($link);return parent::RedirectDownload($link,$FileName,$cookie,$post,$referer,$force_name,$auth,$addon);}}?>