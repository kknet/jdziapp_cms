<?php
/**
 * 极光影院接口文档 - 自动生成
 *
 * - 对Api_系列的接口，进行罗列
 * - 按service进行字典排序
 * - 支持多级目录扫描
 *
 * <br>使用示例：<br>
 * ```
 * <?php
 * // 左侧菜单说明
 * class Demo extends Api {
 *      /**
 *       * 接口服务名称
 *       * @desc 更多说明
 *       * /
 *      public function index() {
 *      }
 * }
 * ```
 * @license     http://www.phalapi.net/license GPL 协议
 * @link        http://www.phalapi.net/
 * @author      xiaoxunzhao     2015-10-25
 * @modify      Aevit           2014-10-29
 * @modify      shwy            2017-03-02
 * @modify      dogstar         2017-06-17
 */

require_once dirname(__FILE__) . '/init.php';

$projectName = '极光影院后端接口文档';

if (substr(PHP_SAPI, 0, 3) == 'cli') {
    // 生成离线文档
    $apiHtml = new \PhalApi\Helper\ApiStaticCreate($projectName);
    $apiHtml->render();
} else if (!empty($_GET['detail'])) {
    // 接口详情页
    $apiDesc = new \PhalApi\Helper\ApiDesc($projectName);
    $apiDesc->render();
} else {
    // 接口列表页
    $apiList = new \PhalApi\Helper\ApiList($projectName);
    $apiList->render();
}

