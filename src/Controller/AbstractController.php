<?php

namespace App\Controller;

use Twig\Environment;

abstract class AbstractController
{
  public function __construct(
    protected Environment $twig
  ) {
  }
  /**
   * Returns a RedirectResponse to the given URL.
   *
   * @param int $status The HTTP status code (302 "Found" by default)
   */
  protected function redirect(string $url, int $status = 302): RedirectResponse
  {
    return new RedirectResponse($url, $status);
  }

  /**
   * Returns a RedirectResponse to the given route with the given parameters.
   *
   * @param int $status The HTTP status code (302 "Found" by default)
   */
  protected function redirectToRoute(string $route, array $parameters = [], int $status = 302): RedirectResponse
  {
    return $this->redirect($this->generateUrl($route, $parameters), $status);
  }
}
