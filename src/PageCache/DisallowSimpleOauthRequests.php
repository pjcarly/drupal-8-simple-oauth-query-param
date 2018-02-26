<?php

/**
 * @file
 * Contains \Drupal\simple_oauth_query_param\PageCache\DisallowSimpleOauthRequests.
 */

namespace Drupal\simple_oauth_query_param\PageCache;
use Drupal\Core\PageCache\RequestPolicyInterface;
use Drupal\simple_oauth_query_param\Authentication\Provider\SimpleOauthAuthenticationProvider;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DisallowSimpleOauthRequests.
 *
 * @package Drupal\simple_oauth_query_param\PageCache
 */
class DisallowSimpleOauthRequests implements RequestPolicyInterface {

  /**
   * {@inheritdoc}
   */
  public function check(Request $request) {
    return SimpleOauthAuthenticationProvider::getTokenValue($request) ? self::DENY : NULL;
  }

}
