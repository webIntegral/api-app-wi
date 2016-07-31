<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'WiUser\\V1\\Rest\\WiRole\\WiRoleResource' => 'WiUser\\V1\\Rest\\WiRole\\WiRoleResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'wi-user.rest.wi-role' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/wi-role[/:wi_role_id]',
                    'defaults' => array(
                        'controller' => 'WiUser\\V1\\Rest\\WiRole\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'wi-user.rest.wi-role',
        ),
    ),
    'zf-rest' => array(
        'WiUser\\V1\\Rest\\WiRole\\Controller' => array(
            'listener' => 'WiUser\\V1\\Rest\\WiRole\\WiRoleResource',
            'route_name' => 'wi-user.rest.wi-role',
            'route_identifier_name' => 'wi_role_id',
            'collection_name' => 'wi_role',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'WiUser\\V1\\Rest\\WiRole\\WiRoleEntity',
            'collection_class' => 'WiUser\\V1\\Rest\\WiRole\\WiRoleCollection',
            'service_name' => 'WiRole',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'WiUser\\V1\\Rest\\WiRole\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'WiUser\\V1\\Rest\\WiRole\\Controller' => array(
                0 => 'application/vnd.wi-user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'WiUser\\V1\\Rest\\WiRole\\Controller' => array(
                0 => 'application/vnd.wi-user.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'WiUser\\V1\\Rest\\WiRole\\WiRoleEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'wi-user.rest.wi-role',
                'route_identifier_name' => 'wi_role_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'WiUser\\V1\\Rest\\WiRole\\WiRoleCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'wi-user.rest.wi-role',
                'route_identifier_name' => 'wi_role_id',
                'is_collection' => true,
            ),
        ),
    ),
);
