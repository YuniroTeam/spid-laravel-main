<?php

/**
 * This file contains the config settings for your SPID Service Provider.
 *
 * @package Italia\SPIDAuth
 * @license BSD-3-clause
 */

// Service Provider Data that we are deploying
return [
    'sp' => [
        // Identifier of the SP entity  (must be a URI)
        'entityId' => 'https://so.yuniro.it/pub-ag-full/test',
        // Specifies info about where and how the <AuthnResponse> message MUST be
        // returned to the requester, in this case our SP.
        'assertionConsumerService' => [
            // URL Location where the <Response> from the IdP will be returned
            'url' => 'https://so.yuniro.it/spid/acs',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-POST binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'index' => '1',
        ],
        // If you need to specify requested attributes, set a
        // attributeConsumingService. nameFormat, attributeValue and
        // friendlyName can be omitted. Otherwise remove this section.
        // 'attributeConsumingService' => [
        //     'serviceName' => '',
        //     'requestedAttributes' => [],
        //     'index' => '',
        // ],
        // Specifies info about where and how the <Logout Response> message MUST be
        // returned to the requester, in this case our SP.
        'singleLogoutService' => [
            // URL Location where the <Response> from the IdP will be returned
            'url' => 'https://so.yuniro.it/slo',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-Redirect binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ],
        // Specifies constraints on the name identifier to be used to
        // represent the requested subject.
        // Take a look on lib/Saml2/Constants.php to see the NameIdFormat supported
        'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',

        // Usually x509cert and privateKey of the SP are provided by files placed at
        // the certs folder. But we can also provide them with the following parameters
        'x509cert' => 'MIIDrDCCApQCCQDKU2rTHx9vkjANBgkqhkiG9w0BAQsFADCBlzELMAkGA1UEBhMCSVQxDzANBgNVBAgMBklUQUxJQTEPMA0GA1UEBwwGTUlMQU5PMRMwEQYDVQQKDApTZWxleGkgc3JsMQ8wDQYDVQQLDAZTZWxleGkxHTAbBgNVBAMMFGh0dHBzOi8vaWxtaW90ZXN0Lml0MSEwHwYJKoZIhvcNAQkBFhJzdXBwb3J0b0BzZWxleGkuaXQwHhcNMjIxMDEzMjIyNDEwWhcNMjMxMDEzMjIyNDEwWjCBlzELMAkGA1UEBhMCSVQxDzANBgNVBAgMBklUQUxJQTEPMA0GA1UEBwwGTUlMQU5PMRMwEQYDVQQKDApTZWxleGkgc3JsMQ8wDQYDVQQLDAZTZWxleGkxHTAbBgNVBAMMFGh0dHBzOi8vaWxtaW90ZXN0Lml0MSEwHwYJKoZIhvcNAQkBFhJzdXBwb3J0b0BzZWxleGkuaXQwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDTxjRsK5M9r/EFyp5LCvzi33rPD3wPwEOqqcUrOeCPfdOhrWbDgorlm/zjmscXBGO6F8tLshFP98QAdLyxz+SllQqeNsFnueUPYvLHsy0k+4ulR1bcnXGWKxZi0jbA07mn+wwEdUxdzE/HSiqWJueVTeU/3USF+ybm+vj3xmtAe3SkFcvBJ2TYXre6oQTq9byhJjbMjOAjKUjhEnfWzaR8iIUbWvdN83z/j2ThaJ7VitcOWEg3kLckKzsZUfIkvka+jp97SiPPcnz/n5JCWKylh6JyHg0Vsr3IqM3qFZi5wqzOmIIoWOWfhHVLcKqWEMW8lq+S/AJnDmSkihp0+apTAgMBAAEwDQYJKoZIhvcNAQELBQADggEBADMFqrTtrUV3oc+tkRCBH7LtmR/NubheyMNg1SQErqwQ8C0D7JhtH0aprpGRjxvVKwM91V7XpE6/OCVHU7oO8pAdN5+Q9izYU2POwGnc8XLgArLz5k8UP9BEU0wk4Wr43L1ahF9YB4fCPXruWn8tARWxRC6kYX3VqEMXec+sP63arITurWd9SAKjqcoPpbYvjdrCWODrux642z6Q8Z4yG5mtMQixP42rW8XJHeY8x2zyHF0Ooh+XLfPJ3Qzc4iSyHLxjUBTh2iXa1qsxI4P/jGsTm/BEWSQHGAUrWysUi0165a4+4S0Raw9DjHtc04UWE7uojP+NcrZT2PySuK9GxGA=',
        'privateKey' => 'MIIEowIBAAKCAQEA08Y0bCuTPa/xBcqeSwr84t96zw98D8BDqqnFKzngj33Toa1mw4KK5Zv845rHFwRjuhfLS7IRT/fEAHS8sc/kpZUKnjbBZ7nlD2Lyx7MtJPuLpUdW3J1xlisWYtI2wNO5p/sMBHVMXcxPx0oqlibnlU3lP91Ehfsm5vr498ZrQHt0pBXLwSdk2F63uqEE6vW8oSY2zIzgIylI4RJ31s2kfIiFG1r3TfN8/49k4Wie1YrXDlhIN5C3JCs7GVHyJL5Gvo6fe0ojz3J8/5+SQlispYeich4NFbK9yKjN6hWYucKszpiCKFjln4R1S3CqlhDFvJavkvwCZw5kpIoadPmqUwIDAQABAoIBAC+n/swI0k2jdj2zZwPEKTx0xhIqjeSNg6y4H6Kml54y1pkfiGyex9r7y2D8x6iqWDbce+dA3xx7ySPBIWVyPyXz8DvCXquU7bMUtUWzUIluAfLjpuxmkdUVRShf3epuuuzOVdn6+4BwJdPXINZBUwQKT3ibtnvgFNUNzVEU2bXcqXUd0gmYeVQJRppVHgRal20iVAVDazw8W+i6Zyj2s7dM2OyoVyVyhQPopnlJPVIsmQn73hOvasPfFx12X7vTCwLcyAsmN3cZaTbuaseXDs1Pur/yJtp8+EAxOqF9F1PDORAfSSMNRF/h7xS7VcM298azdKpEWKkA8CqttZrn6UECgYEA8osECWfyrzzGofEY/LXk0oWcPJDPEyOzRychonMfKmLwFQoqcMnArL/1VrnSzxXDFm/hmcZKqR5z8l2Dizu1gKZiCMSMsIgRPGDlAF5wpIs1SSG2/4nNa1yYm/ghv/C5MvOOK5eegAyXq0dSw6aNlU/t0DLItsQtuj+iXu3ETzkCgYEA34YpT8s9r1mWX3ZsvR/g3t06G/wmf07mRxI4NnfI60+JBQtnlt8ggoK297GxVMsQiDHI9Wkxh4rtCv96TDW1rrtYfU1wrmm77TmSMxRE9gs18x029OL30CU3PKj7rbjQmI5zF0VrvS24hiI1d0/xQhnW2SqUlwRnRrHfvifreesCgYEAuW9jpLVerG/xBbtJeVywF+yjKQMl7uIqnUnjw0n1F/kQyWU+UYFO2ETjFG16KW3f+/WKLIGYb3ii+ThZ7Ee4WyXaag2r6wP8+YazTvbldEgic0ldmj4HWgAvhX/OfetUDQp9NgLz4b6+7urW8lMSiIfVsIpDPsj6lR01zRJINrECgYBV8fEKhFw4gxrlo9RVt98v8iI4xnBK/Rxf8Wp5zv8LM2686NCw2yRV6krN3J4Ru26k33eknQj1U/6m/uqYSQKNp+1zaIZOGcuvgDZtu3p0nITm8LHD4U1l1Bl0EomLF4flUMiCByhQ+jZ8JMUoFi3uu563q76sfn3zWcttA05wdwKBgHUC3/kVu65W1IuTFCCVcqwQrq7BsXVLrbNU3zJokTC8Zf6pgV1f2eozHB4HNFyPWh6kya8noO5Gp8aBjqM7ZlSOszOoBGjvsk5uC+jteHEZZ6JJw1YyOK6h8eQPWAxOEC78YTW6JzlSsRthugh1VpRx4GFlpnfSmO6XaH9uLDW+',
    ],
    'security' => [
        'authnRequestsSigned' => true,
        'logoutRequestSigned' => true,
        'signMetadata' => true,
        'wantAssertionsSigned' => true,
        'signatureAlgorithm' => 'http://www.w3.org/2001/04/xmldsig-more#rsa-sha256',
        'digestAlgorithm' => 'http://www.w3.org/2001/04/xmlenc#sha256',
        'requestedAuthnContext' => [],
        'requestedAuthnContextComparison' => 'minimum',
        'destinationStrictlyMatches' => true,
        'rejectUnsolicitedResponsesWithInResponseTo' => true,
    ],
    'strict' => true,

    // Organization information template, the info in en_US lang is recomended, add more if required
    'organization' => [
        'en' => [
            'name' => 'Selexi',
            'displayname' => 'Selexi srl',
            'url' => 'https://www.selexi.it',
        ],
        'it' => [
            'name' => 'Selexi',
            'displayname' => 'Selexi srl',
            'url' => 'https://www.selexi.it',
        ],
    ]
];