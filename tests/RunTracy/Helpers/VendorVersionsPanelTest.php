<?php
/**
 * Copyright 2016 1f7.wizard@gmail.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Tests\RunTracy\Helpers;

use Tests\BaseTestCase;

/**
 * @runTestsInSeparateProcesses
 * Class VendorVersionsPanelTest
 * @package Tests\RunTracy\Helpers
 */
class VendorVersionsPanelTest extends BaseTestCase
{
    public function testVendorVersionsPanel()
    {
        $panel = new \RunTracy\Helpers\VendorVersionsPanel();
        $this->assertInstanceOf('\Tracy\IBarPanel', $panel);

        // test Tracy tab
        $this->assertRegexp('#Vendor Versions#', $panel->getTab());
        // test Tracy panel
        $this->assertRegexp('#Packages#', $panel->getPanel());
    }
}