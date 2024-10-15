<?php
require_once('config/config.class.php');
require_once('classes/users/user.add.class.php');
require_once('classes/users/user.select.class.php');
require_once('classes/users/user.update.class.php');
require_once('classes/users/user.delete.class.php');
require_once('classes/province/province.add.class.php');
require_once('classes/province/province.select.class.php');
require_once('classes/province/province.update.class.php');
require_once('classes/province/province.delete.class.php');
require_once('classes/district/district.add.class.php');
require_once('classes/district/district.select.class.php');
require_once('classes/district/district.update.class.php');
require_once('classes/district/district.delete.class.php');
require_once('classes/ward/ward.add.class.php');
require_once('classes/ward/ward.select.class.php');
require_once('classes/ward/ward.update.class.php');
require_once('classes/ward/ward.delete.class.php');
require_once('classes/problem/problem.add.class.php');
require_once('classes/problem/problem.select.class.php');
require_once('classes/problem/problem.update.class.php');
require_once('classes/problem/problem.delete.class.php');
require_once('classes/report/report.add.class.php');
require_once('classes/report/report.select.class.php');
require_once('classes/report/report.update.class.php');
require_once('classes/report/report.delete.class.php');
require_once('classes/utils/utils.class.php');
require_once("classes/session/session.class.php");


use UserAccountsManager\UserAddManager;
use UserAccountsManager\UserSelectManager;
use UserAccountsManager\UserUpdateManager;
use UserAccountsManager\UserDeleteManager;
use ProvinceManager\ProvinceAddManager;
use ProvinceManager\ProvinceSelectManager;
use ProvinceManager\ProvinceUpdateManager;
use ProvinceManager\ProvinceDeleteManager;
use DistrictManager\DistrictAddManager;
use DistrictManager\DistrictSelectManager;
use DistrictManager\DistrictUpdateManager;
use DistrictManager\DistrictDeleteManager;
use WardManager\WardAddManager;
use WardManager\WardSelectManager;
use WardManager\WardUpdateManager;
use WardManager\WardDeleteManager;
use ProblemManager\ProblemAddManager;
use ProblemManager\ProblemSelectManager;
use ProblemManager\ProblemUpdateManager;
use ProblemManager\ProblemDeleteManager;
use ReportManager\ReportAddManager;
use ReportManager\ReportSelectManager;
use ReportManager\ReportUpdateManager;
use ReportManager\ReportDeleteManager;
use UtilityManager\Utils;
use SessionManagement\SessionManager;

$UserAddManager = new UserAddManager();
$UserSelectManager = new UserSelectManager();
$UserUpdateManager = new UserUpdateManager();
$UserDeleteManager = new UserDeleteManager();
$ProvinceAddManager = new ProvinceAddManager();
$ProvinceSelectManager = new ProvinceSelectManager();
$ProvinceUpdateManager = new ProvinceUpdateManager();
$ProvinceDeleteManager = new ProvinceDeleteManager();
$DistrictAddManager = new DistrictAddManager();
$DistrictSelectManager = new DistrictSelectManager();
$DistrictUpdateManager = new DistrictUpdateManager();
$DistrictDeleteManager = new DistrictDeleteManager();
$WardAddManager = new WardAddManager();
$WardSelectManager = new WardSelectManager();
$WardUpdateManager = new WardUpdateManager();
$WardDeleteManager = new WardDeleteManager();
$ProblemAddManager = new ProblemAddManager();
$ProblemSelectManager = new ProblemSelectManager();
$ProblemUpdateManager = new ProblemUpdateManager();
$ProblemDeleteManager = new ProblemDeleteManager();
$ReportAddManager = new ReportAddManager();
$ReportSelectManager = new ReportSelectManager();
$ReportUpdateManager = new ReportUpdateManager();
$ReportDeleteManager = new ReportDeleteManager();
$Utils = new Utils();
$SessionManager = new SessionManager();
?>