<?php
use Illuminate\Support\Facades\Session;
/**
 * This file contains the configuration options needed for SPIDAuth Package.
 *
 * @package Italia\SPIDAuth
 * @license BSD-3-clause
 */


return [
    // 'sp_entity_id' => 'https://sso.yuniro.it/sp/',
    'sp_entity_id' => 'https://so.yuniro.it/pub-ag-full/test',
    'sp_base_url' => 'https://so.yuniro.it',
    'sp_service_name' => 'SPID',
    'sp_organization_name' => 'Organizzazione fittizia per il collaudo',
    'sp_organization_display_name' => 'Organizzazione fittizia per il collaudo',
    'sp_organization_url' => 'https://www.cliente1.it',
    'sp_acs_index' => 0,
    'sp_attributes_index' => 0,
    'sp_requested_attributes' => [
        'spidCode',
        'name',
        'familyName',
        'placeOfBirth',
        'countyOfBirth',
        'dateOfBirth',
        'gender',
        'fiscalNumber',
        // 'companyName',
        // 'registeredOffice',
        // 'ivaCode',
        'idCard',
        'domicileStreetAddress',
        'domicilePostalCode',
        'domicileMunicipality',
        'domicileProvince',
        'domicileNation',
        //'mobilePhone',
        'email',
//        'address',
        'digitalAddress',
        'expirationDate',
    ],
    // 'sp_certificate_file' => null,
    // 'sp_private_key_file' => null,
    // 'sp_certificate' => '',
    // 'sp_private_key' =>  '',

    'sp_certificate' => 'MIIDrDCCApQCCQDKU2rTHx9vkjANBgkqhkiG9w0BAQsFADCBlzELMAkGA1UEBhMCSVQxDzANBgNVBAgMBklUQUxJQTEPMA0GA1UEBwwGTUlMQU5PMRMwEQYDVQQKDApTZWxleGkgc3JsMQ8wDQYDVQQLDAZTZWxleGkxHTAbBgNVBAMMFGh0dHBzOi8vaWxtaW90ZXN0Lml0MSEwHwYJKoZIhvcNAQkBFhJzdXBwb3J0b0BzZWxleGkuaXQwHhcNMjIxMDEzMjIyNDEwWhcNMjMxMDEzMjIyNDEwWjCBlzELMAkGA1UEBhMCSVQxDzANBgNVBAgMBklUQUxJQTEPMA0GA1UEBwwGTUlMQU5PMRMwEQYDVQQKDApTZWxleGkgc3JsMQ8wDQYDVQQLDAZTZWxleGkxHTAbBgNVBAMMFGh0dHBzOi8vaWxtaW90ZXN0Lml0MSEwHwYJKoZIhvcNAQkBFhJzdXBwb3J0b0BzZWxleGkuaXQwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDTxjRsK5M9r/EFyp5LCvzi33rPD3wPwEOqqcUrOeCPfdOhrWbDgorlm/zjmscXBGO6F8tLshFP98QAdLyxz+SllQqeNsFnueUPYvLHsy0k+4ulR1bcnXGWKxZi0jbA07mn+wwEdUxdzE/HSiqWJueVTeU/3USF+ybm+vj3xmtAe3SkFcvBJ2TYXre6oQTq9byhJjbMjOAjKUjhEnfWzaR8iIUbWvdN83z/j2ThaJ7VitcOWEg3kLckKzsZUfIkvka+jp97SiPPcnz/n5JCWKylh6JyHg0Vsr3IqM3qFZi5wqzOmIIoWOWfhHVLcKqWEMW8lq+S/AJnDmSkihp0+apTAgMBAAEwDQYJKoZIhvcNAQELBQADggEBADMFqrTtrUV3oc+tkRCBH7LtmR/NubheyMNg1SQErqwQ8C0D7JhtH0aprpGRjxvVKwM91V7XpE6/OCVHU7oO8pAdN5+Q9izYU2POwGnc8XLgArLz5k8UP9BEU0wk4Wr43L1ahF9YB4fCPXruWn8tARWxRC6kYX3VqEMXec+sP63arITurWd9SAKjqcoPpbYvjdrCWODrux642z6Q8Z4yG5mtMQixP42rW8XJHeY8x2zyHF0Ooh+XLfPJ3Qzc4iSyHLxjUBTh2iXa1qsxI4P/jGsTm/BEWSQHGAUrWysUi0165a4+4S0Raw9DjHtc04UWE7uojP+NcrZT2PySuK9GxGA=',
    'sp_private_key' => 'MIIEowIBAAKCAQEA08Y0bCuTPa/xBcqeSwr84t96zw98D8BDqqnFKzngj33Toa1mw4KK5Zv845rHFwRjuhfLS7IRT/fEAHS8sc/kpZUKnjbBZ7nlD2Lyx7MtJPuLpUdW3J1xlisWYtI2wNO5p/sMBHVMXcxPx0oqlibnlU3lP91Ehfsm5vr498ZrQHt0pBXLwSdk2F63uqEE6vW8oSY2zIzgIylI4RJ31s2kfIiFG1r3TfN8/49k4Wie1YrXDlhIN5C3JCs7GVHyJL5Gvo6fe0ojz3J8/5+SQlispYeich4NFbK9yKjN6hWYucKszpiCKFjln4R1S3CqlhDFvJavkvwCZw5kpIoadPmqUwIDAQABAoIBAC+n/swI0k2jdj2zZwPEKTx0xhIqjeSNg6y4H6Kml54y1pkfiGyex9r7y2D8x6iqWDbce+dA3xx7ySPBIWVyPyXz8DvCXquU7bMUtUWzUIluAfLjpuxmkdUVRShf3epuuuzOVdn6+4BwJdPXINZBUwQKT3ibtnvgFNUNzVEU2bXcqXUd0gmYeVQJRppVHgRal20iVAVDazw8W+i6Zyj2s7dM2OyoVyVyhQPopnlJPVIsmQn73hOvasPfFx12X7vTCwLcyAsmN3cZaTbuaseXDs1Pur/yJtp8+EAxOqF9F1PDORAfSSMNRF/h7xS7VcM298azdKpEWKkA8CqttZrn6UECgYEA8osECWfyrzzGofEY/LXk0oWcPJDPEyOzRychonMfKmLwFQoqcMnArL/1VrnSzxXDFm/hmcZKqR5z8l2Dizu1gKZiCMSMsIgRPGDlAF5wpIs1SSG2/4nNa1yYm/ghv/C5MvOOK5eegAyXq0dSw6aNlU/t0DLItsQtuj+iXu3ETzkCgYEA34YpT8s9r1mWX3ZsvR/g3t06G/wmf07mRxI4NnfI60+JBQtnlt8ggoK297GxVMsQiDHI9Wkxh4rtCv96TDW1rrtYfU1wrmm77TmSMxRE9gs18x029OL30CU3PKj7rbjQmI5zF0VrvS24hiI1d0/xQhnW2SqUlwRnRrHfvifreesCgYEAuW9jpLVerG/xBbtJeVywF+yjKQMl7uIqnUnjw0n1F/kQyWU+UYFO2ETjFG16KW3f+/WKLIGYb3ii+ThZ7Ee4WyXaag2r6wP8+YazTvbldEgic0ldmj4HWgAvhX/OfetUDQp9NgLz4b6+7urW8lMSiIfVsIpDPsj6lR01zRJINrECgYBV8fEKhFw4gxrlo9RVt98v8iI4xnBK/Rxf8Wp5zv8LM2686NCw2yRV6krN3J4Ru26k33eknQj1U/6m/uqYSQKNp+1zaIZOGcuvgDZtu3p0nITm8LHD4U1l1Bl0EomLF4flUMiCByhQ+jZ8JMUoFi3uu563q76sfn3zWcttA05wdwKBgHUC3/kVu65W1IuTFCCVcqwQrq7BsXVLrbNU3zJokTC8Zf6pgV1f2eozHB4HNFyPWh6kya8noO5Gp8aBjqM7ZlSOszOoBGjvsk5uC+jteHEZZ6JJw1YyOK6h8eQPWAxOEC78YTW6JzlSsRthugh1VpRx4GFlpnfSmO6XaH9uLDW+',

    'sp_spid_level' => 'https://www.spid.gov.it/SpidL1',

    'sp_contact_persons' => [
        'aggregator' => [
            'VATNumber' => 'IT12852900153',
            'FiscalCode' => '12852900153',
            'Company' => 'Selexi srl',
            'EmailAddress' => 'supporto@selexi.it',
            'TelephoneNumber' => '+390258322302'
        ],
        'aggregated' => [
            'IPACode' => 'IPACode',
            'Company' => 'Company',
            'EmailAddress' => 'EmailAddress',
        ],
        'billing' => [
            'Private' => true,
            'EmailAddress' => 'billing@other.org',
            'TelephoneNumber' => '+39329000001',
            'CessionarioCommittente' => [
                'DatiAnagrafici' => [
                    'IdFiscaleIVA' => [
                        'IdPaese' => 'IT',
                        'IdCodice' => '12345678901',
                    ],
                    'Anagrafica' => [
                        'Denominazione' => 'Società dei collaudi',
                    ],
                ],
                'Sede' => [
                    'Indirizzo' => 'via dei test',
                    'NumeroCivico' => '1756',
                    'CAP' => '20212',
                    'Comune' => 'Milano',
                    'Provincia' => 'MI',
                    'Nazione' => 'IT',
                ]
            ],
            'VATNumber' => '12345678901',
        ]
    ],

    'hide_real_idps' => false,
    'expose_sp_metadata' => true,
    'expose_idps_json' => true,
    'only_sp_logout' => false,
    'test_idp' => true,
    // 'test_idp' => false,Set 'test_idp' => false to disable
    'test_idp' => [
//        // DA USARE IN LOCALE CON DOCKER - FUNZIONANTE
//        // 'entityId' => 'https://localhost:8080',
//        // 'sso_endpoint' => 'https://localhost:8443/samlsso',
//        // 'slo_endpoint' => 'https://localhost:8443/samlsso',
//
//        // 'entityId' => 'https://localhost:8080/demo',
//        // 'sso_endpoint' => 'https://localhost:8443/demo/samlsso',
//        // 'slo_endpoint' => 'https://localhost:8443/demo/samlsso',
//
        // FUNZIONA PER LA DEMO ONLINE
        'entityId' => 'https://demo.spid.gov.it',
        'sso_endpoint' => 'https://demo.spid.gov.it/samlsso',
        'slo_endpoint' => 'https://demo.spid.gov.it/samlsso',

        'x509cert' => 'MIIEGDCCAwCgAwIBAgIJAOrYj9oLEJCwMA0GCSqGSIb3DQEBCwUAMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdDAeFw0xOTA0MTExMDAyMDhaFw0yNTAzMDgxMDAyMDhaMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAK8kJVo+ugRrbbv9xhXCuVrqi4B7/MQzQc62ocwlFFujJNd4m1mXkUHFbgvwhRkQqo2DAmFeHiwCkJT3K1eeXIFhNFFroEzGPzONyekLpjNvmYIs1CFvirGOj0bkEiGaKEs+/umzGjxIhy5JQlqXE96y1+Izp2QhJimDK0/KNij8I1bzxseP0Ygc4SFveKS+7QO+PrLzWklEWGMs4DM5Zc3VRK7g4LWPWZhKdImC1rnS+/lEmHSvHisdVp/DJtbSrZwSYTRvTTz5IZDSq4kAzrDfpj16h7b3t3nFGc8UoY2Ro4tRZ3ahJ2r3b79yK6C5phY7CAANuW3gDdhVjiBNYs0CAwEAAaOByjCBxzAdBgNVHQ4EFgQU3/7kV2tbdFtphbSA4LH7+w8SkcwwgZcGA1UdIwSBjzCBjIAU3/7kV2tbdFtphbSA4LH7+w8SkcyhaaRnMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdIIJAOrYj9oLEJCwMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAJNFqXg/V3aimJKUmUaqmQEEoSc3qvXFITvT5f5bKw9yk/NVhR6wndL+z/24h1OdRqs76blgH8k116qWNkkDtt0AlSjQOx5qvFYh1UviOjNdRI4WkYONSw+vuavcx+fB6O5JDHNmMhMySKTnmRqTkyhjrch7zaFIWUSV7hsBuxpqmrWDoLWdXbV3eFH3mINA5AoIY/m0bZtzZ7YNgiFWzxQgekpxd0vcTseMnCcXnsAlctdir0FoCZztxMuZjlBjwLTtM6Ry3/48LMM8Z+lw7NMciKLLTGQyU8XmKKSSOh0dGh5Lrlt5GxIIJkH81C0YimWebz8464QPL3RbLnTKg+c=',
    ],
    // 'validator_idp' => false,
    'validator_idp' => [
        // DA USARE IN LOCALE CON DOCKER - FUNZIONANTE
        // 'entityId' => 'https://localhost:8080',
        // 'sso_endpoint' => 'https://localhost:8443',
        // 'slo_endpoint' => 'https://localhost:8443',0

        // MODELLO PER IL LOGIN DIRETTO NELL'AREA DEMO DEL DOCKER
        // 'entityId' => 'https://localhost:8080/demo',
        // 'sso_endpoint' => 'https://localhost:8443',
        // 'slo_endpoint' => 'https://localhost:8443',

        // FUNZIONA PER LA DEMO ONLINE
        'entityId' => 'https://demo.spid.gov.it/validator',
        'sso_endpoint' => 'https://demo.spid.gov.it/validator/samlsso',
        'slo_endpoint' => 'https://demo.spid.gov.it/validator/samlsso',
        'x509cert' => 'MIIEGDCCAwCgAwIBAgIJAOrYj9oLEJCwMA0GCSqGSIb3DQEBCwUAMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdDAeFw0xOTA0MTExMDAyMDhaFw0yNTAzMDgxMDAyMDhaMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAK8kJVo+ugRrbbv9xhXCuVrqi4B7/MQzQc62ocwlFFujJNd4m1mXkUHFbgvwhRkQqo2DAmFeHiwCkJT3K1eeXIFhNFFroEzGPzONyekLpjNvmYIs1CFvirGOj0bkEiGaKEs+/umzGjxIhy5JQlqXE96y1+Izp2QhJimDK0/KNij8I1bzxseP0Ygc4SFveKS+7QO+PrLzWklEWGMs4DM5Zc3VRK7g4LWPWZhKdImC1rnS+/lEmHSvHisdVp/DJtbSrZwSYTRvTTz5IZDSq4kAzrDfpj16h7b3t3nFGc8UoY2Ro4tRZ3ahJ2r3b79yK6C5phY7CAANuW3gDdhVjiBNYs0CAwEAAaOByjCBxzAdBgNVHQ4EFgQU3/7kV2tbdFtphbSA4LH7+w8SkcwwgZcGA1UdIwSBjzCBjIAU3/7kV2tbdFtphbSA4LH7+w8SkcyhaaRnMGUxCzAJBgNVBAYTAklUMQ4wDAYDVQQIEwVJdGFseTENMAsGA1UEBxMEUm9tZTENMAsGA1UEChMEQWdJRDESMBAGA1UECxMJQWdJRCBURVNUMRQwEgYDVQQDEwthZ2lkLmdvdi5pdIIJAOrYj9oLEJCwMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAJNFqXg/V3aimJKUmUaqmQEEoSc3qvXFITvT5f5bKw9yk/NVhR6wndL+z/24h1OdRqs76blgH8k116qWNkkDtt0AlSjQOx5qvFYh1UviOjNdRI4WkYONSw+vuavcx+fB6O5JDHNmMhMySKTnmRqTkyhjrch7zaFIWUSV7hsBuxpqmrWDoLWdXbV3eFH3mINA5AoIY/m0bZtzZ7YNgiFWzxQgekpxd0vcTseMnCcXnsAlctdir0FoCZztxMuZjlBjwLTtM6Ry3/48LMM8Z+lw7NMciKLLTGQyU8XmKKSSOh0dGh5Lrlt5GxIIJkH81C0YimWebz8464QPL3RbLnTKg+c=',

        // VALIDATOR PER AGID !! IMPORTANTE !!
        /*        'entityId' => 'https://validator.spid.gov.it',
                'sso_endpoint' => 'https://validator.spid.gov.it/samlsso',
                'slo_endpoint' => 'https://validator.spid.gov.it/samlsso',
                'x509cert' => 'MIIEfzCCA2egAwIBAgIUVSeD58C3IyG/SwADsok3KChutAAwDQYJKoZIhvcNAQELBQAwgc4xCzAJBgNVBAYTAklUMQ0wCwYDVQQIDARSb21lMQ0wCwYDVQQHDARSb21lMS0wKwYDVQQKDCRBZ0lEIC0gQWdlbnppYSBwZXIgbCdJdGFsaWEgRGlnaXRhbGUxLDAqBgNVBAsMI0FnSUQgLSBTZXJ2aXppbyBhY2NyZWRpdGFtZW50byBTUElEMR4wHAYDVQQDDBV2YWxpZGF0b3Iuc3BpZC5nb3YuaXQxJDAiBgkqhkiG9w0BCQEWFXNwaWQudGVjaEBhZ2lkLmdvdi5pdDAeFw0yMTA5MjgwNzM5MTFaFw0yMzA5MjgwNzM5MTFaMIHOMQswCQYDVQQGEwJJVDENMAsGA1UECAwEUm9tZTENMAsGA1UEBwwEUm9tZTEtMCsGA1UECgwkQWdJRCAtIEFnZW56aWEgcGVyIGwnSXRhbGlhIERpZ2l0YWxlMSwwKgYDVQQLDCNBZ0lEIC0gU2Vydml6aW8gYWNjcmVkaXRhbWVudG8gU1BJRDEeMBwGA1UEAwwVdmFsaWRhdG9yLnNwaWQuZ292Lml0MSQwIgYJKoZIhvcNAQkBFhVzcGlkLnRlY2hAYWdpZC5nb3YuaXQwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQCjbuxHXdLPZZc/b9YaSqxdUsdDLYNdpBjdEmPoNf2LrXlBv8IODStRkNyQsAnOdy+R7Ud+kdtJi+tblx8e29RHRSsvl6HL3O0/3aS9XsyUGhbUE45SLxNWTMubU7UyS1mRhSdEUIbtVxYgSu1uH6zeIN2DhxQZIb0APZ7aLbJewu25qECz2dnV54R45pBwst/6MrnBa15VfKDRA2zdgfGjIgGWgxWtf7CqzfXnhush0IyaL4RVn/7tUurxj//LY6f37yMP1EAIbn9thc37ZhyfM9grAH3Cc4kdEB+HaiQ83fTH6LshPgTHww0w88TxK1jrV/vEG3T6ZhCqXt7qRvKtAgMBAAGjUzBRMB0GA1UdDgQWBBT0HytnpUbkZxLa0N+lfD08WrQX2TAfBgNVHSMEGDAWgBT0HytnpUbkZxLa0N+lfD08WrQX2TAPBgNVHRMBAf8EBTADAQH/MA0GCSqGSIb3DQEBCwUAA4IBAQCYcghyQ6zhRmLDzliNgJxPUOTJa/9UmZRgWYFcYHMumXTTTT/fmy00hTRFIKWpB0AibyEJhODIjCqNJN3RsCDbkwEDR0thhMQ51vK8oB9X1JVMDQ8v+eRTQTa8bZv8W8IPn7fgQFoX5IkiXEQtgf+hi/ErX/L4O6qbYxE/lIZneXXxlZUVM4YN9aS25nmuCumg9MbrmCCwplliKgKSZ77IERmcFm1tzpEFMJNI8LIaDL8VLSOosIMdLwel3oP3mosTw2hkSfyVUwHp/0y4rJ+zIel/4vBoySsyrJCCi8wBe9WNpIlUV/gGSayPkJMe0qc8m0GzncZDkqF/Bd7xsUHc',*/
    ],

    'middleware_group' => 'web',
    'routes_prefix' => 'spid',
    // 'login_view' => 'spid-auth::login-spid',
    'login_view' => 'home',
    'user_dashboard' => 'https://prod.yuniro.it/user/dashboard',
    'after_login_url' => '/user/dashboard',
    'second_login_url' => '/user/dashboard',
    'after_logout_url' => '/',
];
