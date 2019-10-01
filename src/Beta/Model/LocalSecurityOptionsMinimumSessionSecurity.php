<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsMinimumSessionSecurity File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* LocalSecurityOptionsMinimumSessionSecurity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LocalSecurityOptionsMinimumSessionSecurity extends Enum
{
    /**
    * The Enum LocalSecurityOptionsMinimumSessionSecurity
    */
    const NONE = "none";
    const REQUIRE_NTML_V2_SESSION_SECURITY = "requireNtmlV2SessionSecurity";
    const REQUIRE128_BIT_ENCRYPTION = "require128BitEncryption";
    const NTLM_V2_AND128_BIT_ENCRYPTION = "ntlmV2And128BitEncryption";
}