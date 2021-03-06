<?php namespace CodeIgniter\HTTP\Exceptions;

use CodeIgniter\Exceptions\ExceptionInterface;
use CodeIgniter\Exceptions\FrameworkException;

class HTTPException extends FrameworkException implements ExceptionInterface
{
	/**
	 * For CurlRequest
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forMissingCurl()
	{
		return new self(lang('HTTP.missingCurl'));
	}

	/**
	 * For CurlRequest
	 *
	 * @param string $cert
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forSSLCertNotFound(string $cert)
	{
		return new self(lang('HTTP.sslCertNotFound', [$cert]));
	}

	/**
	 * For CurlRequest
	 *
	 * @param string $key
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forInvalidSSLKey(string $key)
	{
		return new self(lang('HTTP.invalidSSLKey', [$key]));
	}

	/**
	 * For CurlRequest
	 *
	 * @param string $errorNum
	 * @param string $error
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forCurlError(string $errorNum, string $error)
	{
		return new self(lang('HTTP.curlError', [$errorNum, $error]));
	}

	/**
	 * For IncomingRequest
	 *
	 * @param string $type
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forInvalidNegotiationType(string $type)
	{
		return new self(lang('HTTP.invalidNegotiationType', [$type]));
	}

	/**
	 * For Message
	 *
	 * @param string $protocols
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forInvalidHTTPProtocol(string $protocols)
	{
		return new self(lang('HTTP.invalidHTTPProtocol', [$protocols]));
	}

	/**
	 * For Negotiate
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forEmptySupportedNegotiations()
	{
		return new self(lang('HTTP.emptySupportedNegotiations'));
	}

	/**
	 * For RedirectResponse
	 *
	 * @param string $route
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forInvalidRedirectRoute(string $route)
	{
		return new self(lang('HTTP.invalidRoute', [$route]));
	}

	/**
	 * For Response
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forMissingResponseStatus()
	{
		return new self(lang('HTTP.missingResponseStatus'));
	}

	/**
	 * For Response
	 *
	 * @param int $code
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forInvalidStatusCode(int $code)
	{
		return new self(lang('HTTP.invalidStatusCode', [$code]));
	}

	/**
	 * For Response
	 *
	 * @param int $code
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forUnkownStatusCode(int $code)
	{
		return new self(lang('HTTP.unknownStatusCode', [$code]));
	}

	/**
	 * For URI
	 *
	 * @param string $uri
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forUnableToParseURI(string $uri)
	{
		return new self(lang('HTTP.cannotParseURI', [$uri]));
	}

	/**
	 * For URI
	 *
	 * @param int $segment
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forURISegmentOutOfRange(int $segment)
	{
		return new self(lang('HTTP.segmentOutOfRange', [$segment]));
	}

	/**
	 * For URI
	 *
	 * @param int $port
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forInvalidPort(int $port)
	{
		return new self(lang('HTTP.invalidPort', [$port]));
	}

	/**
	 * For URI
	 *
	 * @return \CodeIgniter\HTTP\Exceptions\HTTPException
	 */
	public static function forMalformedQueryString()
	{
		return new self(lang('HTTP.malformedQueryString'));
	}
}
