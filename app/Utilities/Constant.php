<?php

namespace App\Utilities;

class Constant
{
    const user = [
        'buyer' => 'buyer',
        'seller' => 'seller',
        'admin' => 'admin',
    ];
    # List of status codes being used in this project are below
    # HttpCodes::OK // 200 (for success request)
    # HttpCodes::BadRequest // 400 (for exception case)
    # HttpCodes::Unauthorized // 401 (if user is not authorized)
    # HttpCodes::Forbidden // 403 (if user has no permission)
    # HttpCodes::NotFound // 404
    # HttpCodes::MethodNotAllowed // 405
    # HttpCodes::UnprocessableEntity // 422 (if user not provide valid parameter || validation failed)
    # HttpCodes::InternalServerError // 500

    #region 1XX

    # 1XX informational response
    # An informational response indicates that the request was received and understood.
    # It is issued on a provisional basis while request processing continues.
    # It alerts the client to wait for a final response.
    # The message consists only of the status line and optional header fields, and is terminated by an empty line.
    # As the HTTP/1.0 standard did not define any 1xx status codes, servers must not send a 1xx response to an HTTP/1.0 compliant client except under experimental conditions.


    # Status Code: 100 Continue
    # The server has received the request headers and the client should proceed to send the request body (in the case of a request for which a body needs to be sent; for example, a POST request).
    # Sending a large request body to a server after a request has been rejected for inappropriate headers would be inefficient.
    # To have a server check the request's headers, a client must send Expect: 100-continue as a header in its initial request and receive a 100 Continue status code in response before sending the body.
    # If the client receives an error code such as 403 (Forbidden) or 405 (Method Not Allowed) then it should not send the request's body.
    # The response 417 Expectation Failed indicates that the request should be repeated without the Expect header as it indicates that the server does not support expectations (this is the case, for example, of HTTP/1.0 servers).
    const Continue = 100;

    # Status Code: 101 Switching Protocols
    # The requester has asked the server to switch protocols and the server has agreed to do so.
    const SwitchingProtocols = 101;

    # Status Code: 102 Processing (WebDAV; RFC 2518)
    # A WebDAV request may contain many sub-requests involving file operations, requiring a long time to complete the request.
    # This code indicates that the server has received and is processing the request, but no response is available yet.
    # This prevents the client from timing out and assuming the request was lost.
    const Processing = 102;

    # Status Code: 103 Early Hints (RFC 8297)
    # Used to return some response headers before final HTTP message.
    const EarlyHints = 103;

    #endregion 1XX

    #region 2XX

    # 2xx success
    # This class of status codes indicates the action requested by the client was received, understood, and accepted.

    # Status Code: 200 OK
    # Standard response for successful HTTP requests.
    # The actual response will depend on the request method used.
    # In a GET request, the response will contain an entity corresponding to the requested resource.
    # In a POST request, the response will contain an entity describing or containing the result of the action.
    const OK = 200;

    # Status Code: 201 Created
    # The request has been fulfilled, resulting in the creation of a new resource.
    const Created = 201;

    # Status Code: 202 Accepted
    # The request has been accepted for processing, but the processing has not been completed.
    # The request might or might not be eventually acted upon, and may be disallowed when processing occurs.
    const Accepted = 202;

    # Status Code: 203 Non-Authoritative Information (since HTTP/1.1)
    # The server is a transforming proxy (e.g. a Web accelerator) that received a 200 OK from its origin, but is returning a modified version of the origin's response.
    const NonAuthoritativeInformation = 203;

    # Status Code: 204 No Content
    # The server successfully processed the request, and is not returning any content.
    const NoContent = 204;

    # Status Code: 205 Reset Content
    # The server successfully processed the request, asks that the requester reset its document view, and is not returning any content.
    const ResetContent = 205;

    # Status Code: 206 Partial Content (RFC 7233)
    # The server is delivering only part of the resource (byte serving) due to a range header sent by the client.
    # The range header is used by HTTP clients to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams.
    const PartialContent = 206;

    # Status Code: 207 Multi-Status (WebDAV; RFC 4918)
    # The message body that follows is by default an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.
    const MultiStatus = 207;

    # Status Code: 208 Already Reported (WebDAV; RFC 5842)
    # The members of a DAV binding have already been enumerated in a preceding part of the (multistatus) response, and are not being included again.
    const AlreadyReported = 208;

    # Status Code: 226 IM Used (RFC 3229)
    # The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.
    const IMUsed = 226;

    #endregion 2XX

    #region 3XX

    # 3xx redirection
    # This class of status code indicates the client must take additional action to complete the request.
    # Many of these status codes are used in URL redirection.
    #
    # A user agent may carry out the additional action with no user interaction only if the method used in the second request is GET or HEAD.
    # A user agent may automatically redirect a request.
    # A user agent should detect and intervene to prevent cyclical redirects.

    # Status Code: 300 Mutiple Choices
    # Indicates multiple options for the resource from which the client may choose (via agent-driven content negotiation).
    # For example, this code could be used to present multiple video format options, to list files with different filename extensions, or to suggest word-sense disambiguation.
    const MutipleChoices = 300;

    # Status Code: 301 Moved Permanently
    # This and all future requests should be directed to the given URI
    const MovedPermanently = 301;

    # Status Code: 302 Found (Previously "Moved temporarily")
    # Tells the client to look at (browse to) another URL.
    # 302 has been superseded by 303 and 307.
    # This is an example of industry practice contradicting the standard.
    # The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"), but popular browsers implemented 302 with the functionality of a 303 See Other.
    # Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours.
    # However, some Web applications and frameworks use the 302 status code as if it were the 303.
    const Found = 302;

    # Status Code: 303 See Other (since HTTP/1.1)
    # The response to the request can be found under another URI using the GET method.
    # When received in response to a POST (or PUT/DELETE), the client should presume that the server has received the data and should issue a new GET request to the given URI.
    const SeeOther = 303;

    # Status Code: 304 Not Modified (RFC 7232)
    # Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since or If-None-Match.
    # In such case, there is no need to retransmit the resource since the client still has a previously-downloaded copy.
    const NotModified = 304;

    # Status Code: 305 Use Proxy (since HTTP/1.1)
    # The requested resource is available only through a proxy, the address for which is provided in the response.
    # For security reasons, many HTTP clients (such as Mozilla Firefox and Internet Explorer) do not obey this status code.
    const UseProxy = 305;

    # Status Code: 306 Switch Proxy
    # No longer used. Originally meant "Subsequent requests should use the specified proxy."
    const SwitchProxy = 306;

    # Status Code: 307 Temporary Redirect (since HTTP/1.1)
    # In this case, the request should be repeated with another URI; however, future requests should still use the original URI.
    # In contrast to how 302 was historically implemented, the request method is not allowed to be changed when reissuing the original request.
    # For example, a POST request should be repeated using another POST request.
    const TemporaryRedirect = 307;

    # Status Code: 308 Permanent Redirect (RFC 7538)
    # The request and all future requests should be repeated using another URI.
    # 307 and 308 parallel the behaviors of 302 and 301, but do not allow the HTTP method to change.
    # So, for example, submitting a form to a permanently redirected resource may continue smoothly.
    const PermanentRedirect = 308;

    #endregion 3XX

    #region 4XX

    # 4xx client errors
    # This class of status code is intended for situations in which the error seems to have been caused by the client.
    # Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and whether it is a temporary or permanent condition.
    # These status codes are applicable to any request method.
    # User agents should display any included entity to the user.

    # Status Code: 400 Bad Request
    # The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax, size too large, invalid request message framing, or deceptive request routing).
    const BadRequest = 400;

    # Status Code: 401 Unauthorized  (RFC 7235)
    # Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided.
    # The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource.
    # See Basic access authentication and Digest access authentication.
    # Status Code: 401 semantically means "unauthorised", the user does not have valid authentication credentials for the target resource.
    # Note: Some sites incorrectly issue HTTP 401 when an IP address is banned from the website (usually the website domain) and that specific address is refused permission to access a website.
    const Unauthorized = 401;

    # Status Code: 402 Payment Required
    # Reserved for future use.
    # The original intention was that this code might be used as part of some form of digital cash or micropayment scheme, as proposed, for example, by GNU Taler, but that has not yet happened, and this code is not widely used.
    # Google Developers API uses this status if a particular developer has exceeded the daily limit on requests.
    # Sipgate uses this code if an account does not have sufficient funds to start a call.
    # Shopify uses this code when the store has not paid their fees and is temporarily disabled.
    # Stripe uses this code for failed payments where parameters were correct, for example blocked fraudulent payments.
    const PaymentRequired = 402;


    # Status Code: 403 Forbidden
    # The request contained valid data and was understood by the server, but the server is refusing action.
    # This may be due to the user not having the necessary permissions for a resource or needing an account of some sort, or attempting a prohibited action (e.g. creating a duplicate record where only one is allowed).
    # This code is also typically used if the request provided authentication by answering the WWW-Authenticate header field challenge, but the server did not accept that authentication.
    # The request should not be repeated.
    const Forbidden = 403;

    # Status Code: 404 Not Found
    # The requested resource could not be found but may be available in the future.
    # Subsequent requests by the client are permissible.
    const NotFound = 404;

    # Status Code: 405 Method Not Allowed
    # A request method is not supported for the requested resource; for example, a GET request on a form that requires data to be presented via POST, or a PUT request on a read-only resource.
    const MethodNotAllowed = 405;

    # Status Code: 406 Not Acceptable
    # The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the request.
    const NotAcceptable = 406;

    # Status Code: 407 Proxy Authentication Required (RFC 7235)
    # The client must first authenticate itself with the proxy.
    const ProxyAuthenticationRequired = 407;

    # Status Code: 408 Request Timeout
    # The server timed out waiting for the request.
    # According to HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait.
    # The client MAY repeat the request without modifications at any later time."
    const RequestTimeout = 408;

    # Status Code: 409 Conflict
    # Indicates that the request could not be processed because of conflict in the current state of the resource, such as an edit conflict between multiple simultaneous updates.
    const Conflict = 409;

    # Status Code: 410 Gone
    # Indicates that the resource requested is no longer available and will not be available again.
    # This should be used when a resource has been intentionally removed and the resource should be purged.
    # Upon receiving a 410 status code, the client should not request the resource in the future.
    # Clients such as search engines should remove the resource from their indices.
    # Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.
    const Gone = 410;

    # Status Code: 411 Length Required
    # The request did not specify the length of its content, which is required by the requested resource.
    const LengthRequired = 411;

    # Status Code: 412 Precondition Failed (RFC 7232)
    # The server does not meet one of the preconditions that the requester put on the request header fields.
    const PreconditionFailed = 412;

    # Status Code: 413 Payload Too Large (RFC 7231)
    # The request is larger than the server is willing or able to process.
    # Previously called "Request Entity Too Large".
    const PayloadTooLarge = 412;

    # Status Code: 414 URI Too Long (RFC 7231)
    # The URI provided was too long for the server to process.
    # Often the result of too much data being encoded as a query-string of a GET request, in which case it should be converted to a POST request.
    # Called "Request-URI Too Long" previously.
    const URITooLong = 414;

    # Status Code: 415 Unsupported Media Type (RFC 7231)
    # The request entity has a media type which the server or resource does not support.
    # For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.
    const UnsupportedMediaType = 415;

    # Status Code: 416 Range Not Satisfiable (RFC 7233)
    # The client has asked for a portion of the file (byte serving), but the server cannot supply that portion.
    # For example, if the client asked for a part of the file that lies beyond the end of the file.
    # Called "Requested Range Not Satisfiable" previously.
    const RangeNotSatsfiable = 416;

    # Status Code: 417 Expectation Failed
    # The server cannot meet the requirements of the Expect request-header field.
    const ExpectationFailed = 417;

    # Status Code: 418 I'm a teapot (RFC 2324, RFC 7168)
    # This code was defined in 1998 as one of the traditional IETF April Fools' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers.
    # The RFC specifies this code should be returned by teapots requested to brew coffee.
    # This HTTP status is used as an Easter egg in some websites, such as Google.com's I'm a teapot easter egg.
    const IMATeapot = 418;

    # Status Code: 421 Misdirected Request (RFC 7540)
    # The request was directed at a server that is not able to produce a response (for example because of connection reuse).
    const MisdirectedRequest = 421;

    # Status Code: 422 Unprocessable Entity (WebDAV; RFC 4918)
    # The request was well-formed but was unable to be followed due to semantic errors.
    const UnprocessableEntity = 422;

    # Status Code: 423 Locked (WebDAV; RFC 4918)
    # The resource that is being accessed is locked.
    const Locked = 423;

    # Status Code: 424 Failed Dependency (WebDAV; RFC 4918)
    # The request failed because it depended on another request and that request failed (e.g., a PROPPATCH).
    const FailedDependency = 424;

    # Status Code: 425 Too Early (RFC 8470)
    # Indicates that the server is unwilling to risk processing a request that might be replayed.
    const TooEarly = 425;

    # Status Code: 426 Upgrade Required
    # The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.
    const UpgradeRequired = 426;

    # Status Code: 428 Precondition Required (RFC 6585)
    # The origin server requires the request to be conditional.
    # Intended to prevent the 'lost update' problem, where a client GETs a resource's state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.
    const PreconditionRequired = 428;

    # Status Code: 429 Too Many Requests (RFC 6585)
    # The user has sent too many requests in a given amount of time.
    # Intended for use with rate-limiting schemes.
    const TooManyRequests = 429;

    # Status Code: 431 Request Header Fields Too Large (RFC 6585)
    # The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.
    const RequestHeaderFieldsTooLarge = 431;

    # Status Code: 451 Unavailable For Legal Reasons (RFC 7725)
    # A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource.
    # The code 451 was chosen as a reference to the novel Fahrenheit 451 (see the Acknowledgements in the RFC).
    const UnavailableForLegalReasons = 451;

    #endregion 4XX

    #region 5XX

    # 5xx server errors
    # The server failed to fulfill a request.
    # Response status codes beginning with the digit "5" indicate cases in which the server is aware that it has encountered an error or is otherwise incapable of performing the request.
    # Except when responding to a HEAD request, the server should include an entity containing an explanation of the error situation, and indicate whether it is a temporary or permanent condition.
    # Likewise, user agents should display any included entity to the user.
    # These response codes are applicable to any request method.

    # Status Code: 500 Internal Server Error
    # A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.
    const InternalServerError = 500;

    # Status Code: 501 Not Implemented
    # The server either does not recognize the request method, or it lacks the ability to fulfil the request.
    # Usually this implies future availability (e.g., a new feature of a web-service API).
    const NotImplemented = 501;

    # Status Code: 502 Bad Gateway
    # The server was acting as a gateway or proxy and received an invalid response from the upstream server.
    const BadGateway = 502;

    # Status Code: 503 Service Unavailable
    # The server cannot handle the request (because it is overloaded or down for maintenance).
    # Generally, this is a temporary state.
    const ServiceUnavailable = 503;

    # Status Code: 504 Gateway Timeout
    # The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.
    const GatewayTimeout = 504;

    # Status Code: 505 HTTP Version Not Supported
    # The server does not support the HTTP protocol version used in the request.
    const HTTPVersionNotSupported = 505;

    # Status Code: 506 Variant Also Negotiates (RFC 2295)
    # Transparent content negotiation for the request results in a circular reference.
    const VariantAlsoNegotiates = 506;

    #507 Insufficient Storage (WebDAV; RFC 4918)
    #The server is unable to store the representation needed to complete the request.[16]
    const InsufficientStorage = 507;

    # Status Code: 508 Loop Detected (WebDAV; RFC 5842)
    # The server detected an infinite loop while processing the request (sent instead of 208 Already Reported).
    const LoopDetected = 508;

    # Status Code: 510 Not Extended (RFC 2774)
    # Further extensions to the request are required for the server to fulfil it.[70]
    const NotExtended = 510;

    # Status Code: 511 Network Authentication Required (RFC 6585)
    # The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot).[59]
    const NetworkAuthenticationRequired = 511;

    #endregion 5XX
}
