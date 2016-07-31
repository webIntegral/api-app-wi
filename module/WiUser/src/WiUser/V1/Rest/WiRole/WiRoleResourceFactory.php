<?php
namespace WiUser\V1\Rest\WiRole;

class WiRoleResourceFactory
{
    public function __invoke($services)
    {
        return new WiRoleResource();
    }
}
