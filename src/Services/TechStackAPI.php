<?php

namespace Quarterloop\TechStackTile\Services;

use Illuminate\Support\Facades\Http;

class TechStackAPI
{
  public static function getTechStack(string $url, string $key): array
  {
      $apiCall = "https://whatcms.org/API/Tech?url={$url}&key={$key}&private=true";

      $response = Http::get($apiCall)->json();

      return $response;
  }
}
