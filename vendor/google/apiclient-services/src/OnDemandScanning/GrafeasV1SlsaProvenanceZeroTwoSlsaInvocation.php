<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\OnDemandScanning;

class GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation extends \Google\Model
{
  /**
   * @var GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource
   */
  public $configSource;
  protected $configSourceType = GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource::class;
  protected $configSourceDataType = '';
  /**
   * @var array[]
   */
  public $environment;
  /**
   * @var array[]
   */
  public $parameters;

  /**
   * @param GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource
   */
  public function setConfigSource(GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource $configSource)
  {
    $this->configSource = $configSource;
  }
  /**
   * @return GrafeasV1SlsaProvenanceZeroTwoSlsaConfigSource
   */
  public function getConfigSource()
  {
    return $this->configSource;
  }
  /**
   * @param array[]
   */
  public function setEnvironment($environment)
  {
    $this->environment = $environment;
  }
  /**
   * @return array[]
   */
  public function getEnvironment()
  {
    return $this->environment;
  }
  /**
   * @param array[]
   */
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  /**
   * @return array[]
   */
  public function getParameters()
  {
    return $this->parameters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation::class, 'Google_Service_OnDemandScanning_GrafeasV1SlsaProvenanceZeroTwoSlsaInvocation');
