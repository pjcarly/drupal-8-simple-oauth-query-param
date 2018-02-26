<?php

/**
 * @file
 * Contains \Drupal\simple_oauth_query_param\Authentication\Provider\SimpleOauthQueryParamAuthenticationProvider.
 */

namespace Drupal\simple_oauth_query_param\Authentication\Provider;

use Drupal\simple_oauth\Authentication\Provider\SimpleOauthAuthenticationProvider;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityManagerInterface;
use Drupal\simple_oauth\Authentication\TokenAuthUser;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SimpleOauthQueryParamAuthenticationProvider.
 *
 * @package Drupal\simple_oauth_query_param\Authentication\Provider
 */
class SimpleOauthQueryParamAuthenticationProvider extends SimpleOauthAuthenticationProvider
{
  public static function getTokenValue(Request $request)
  {
    // Implementation of http://tools.ietf.org/html/rfc6750#section-2.3 as an addon for simple_auth
    // Please be considerate of the security implications, only use this in cases where
    // an Authorization Header cannot be passed

    if($request->query->has('access_token'))
    {
      return $request->query->get('access_token');
    }

    return NULL;
  }
}
