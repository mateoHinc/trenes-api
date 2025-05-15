<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-stations">
                                <a href="#endpoints-GETapi-stations">GET api/stations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-stations">
                                <a href="#endpoints-POSTapi-stations">POST api/stations</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-stations--id-">
                                <a href="#endpoints-GETapi-stations--id-">GET api/stations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-stations--id-">
                                <a href="#endpoints-PUTapi-stations--id-">PUT api/stations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-stations--id-">
                                <a href="#endpoints-DELETEapi-stations--id-">DELETE api/stations/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-trains-available">
                                <a href="#endpoints-GETapi-trains-available">GET api/trains/available</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-trains">
                                <a href="#endpoints-GETapi-trains">GET api/trains</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-trains">
                                <a href="#endpoints-POSTapi-trains">POST api/trains</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-trains--id-">
                                <a href="#endpoints-GETapi-trains--id-">GET api/trains/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-trains--id-">
                                <a href="#endpoints-PUTapi-trains--id-">PUT api/trains/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-trains--id-">
                                <a href="#endpoints-DELETEapi-trains--id-">DELETE api/trains/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-routes">
                                <a href="#endpoints-GETapi-routes">GET api/routes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-routes">
                                <a href="#endpoints-POSTapi-routes">POST api/routes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-routes--id-">
                                <a href="#endpoints-GETapi-routes--id-">GET api/routes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-routes--id-">
                                <a href="#endpoints-PUTapi-routes--id-">PUT api/routes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-routes--id-">
                                <a href="#endpoints-DELETEapi-routes--id-">DELETE api/routes/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-trains--id--routes">
                                <a href="#endpoints-GETapi-trains--id--routes">GET api/trains/{id}/routes</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-trains--id--deactivate">
                                <a href="#endpoints-PATCHapi-trains--id--deactivate">PATCH api/trains/{id}/deactivate</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-schedules--id--seats-available">
                                <a href="#endpoints-GETapi-schedules--id--seats-available">GET api/schedules/{id}/seats-available</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-schedules-today">
                                <a href="#endpoints-GETapi-schedules-today">GET api/schedules/today</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-schedules-next">
                                <a href="#endpoints-GETapi-schedules-next">GET api/schedules/next</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-schedules">
                                <a href="#endpoints-GETapi-schedules">GET api/schedules</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-schedules">
                                <a href="#endpoints-POSTapi-schedules">POST api/schedules</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-schedules--id-">
                                <a href="#endpoints-GETapi-schedules--id-">GET api/schedules/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-schedules--id-">
                                <a href="#endpoints-PUTapi-schedules--id-">PUT api/schedules/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-schedules--id-">
                                <a href="#endpoints-DELETEapi-schedules--id-">DELETE api/schedules/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tickets-active">
                                <a href="#endpoints-GETapi-tickets-active">GET api/tickets/active</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tickets">
                                <a href="#endpoints-GETapi-tickets">GET api/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tickets">
                                <a href="#endpoints-POSTapi-tickets">POST api/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tickets--id-">
                                <a href="#endpoints-GETapi-tickets--id-">GET api/tickets/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-tickets--id-">
                                <a href="#endpoints-PUTapi-tickets--id-">PUT api/tickets/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-tickets--id-">
                                <a href="#endpoints-DELETEapi-tickets--id-">DELETE api/tickets/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-schedules--id--users">
                                <a href="#endpoints-GETapi-schedules--id--users">GET api/schedules/{id}/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tickets-schedule--id-">
                                <a href="#endpoints-GETapi-tickets-schedule--id-">GET api/tickets/schedule/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tickets-history-user--id-">
                                <a href="#endpoints-GETapi-tickets-history-user--id-">GET api/tickets/history/user/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tickets--id--use">
                                <a href="#endpoints-POSTapi-tickets--id--use">POST api/tickets/{id}/use</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tickets--id--cancel">
                                <a href="#endpoints-POSTapi-tickets--id--cancel">POST api/tickets/{id}/cancel</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users-search">
                                <a href="#endpoints-GETapi-users-search">GET api/users/search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users">
                                <a href="#endpoints-GETapi-users">GET api/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-users">
                                <a href="#endpoints-POSTapi-users">POST api/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users--id-">
                                <a href="#endpoints-GETapi-users--id-">GET api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-users--id-">
                                <a href="#endpoints-PUTapi-users--id-">PUT api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-users--id-">
                                <a href="#endpoints-DELETEapi-users--id-">DELETE api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users-trashed">
                                <a href="#endpoints-GETapi-users-trashed">GET api/users/trashed</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users--id--tickets">
                                <a href="#endpoints-GETapi-users--id--tickets">GET api/users/{id}/tickets</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-users--id--restore">
                                <a href="#endpoints-PUTapi-users--id--restore">PUT api/users/{id}/restore</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PATCHapi-users--id--deactivate">
                                <a href="#endpoints-PATCHapi-users--id--deactivate">PATCH api/users/{id}/deactivate</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-reports-train-usage">
                                <a href="#endpoints-GETapi-reports-train-usage">GET api/reports/train-usage</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-reports-income">
                                <a href="#endpoints-GETapi-reports-income">GET api/reports/income</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: May 13, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-stations">GET api/stations</h2>

<p>
</p>



<span id="example-requests-GETapi-stations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/stations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stations">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Estaci&oacute;n 1&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Estaci&oacute;n 2&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:25:38.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:25:38.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Estaci&oacute;n 3&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:25:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:25:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Estaci&oacute;n 4&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:25:50.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:25:50.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Estaci&oacute;n 5&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Estaci&oacute;n 6&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:28:46.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:28:46.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Estaci&oacute;n 6&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:29:41.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:29:41.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;Estaci&oacute;n Cartagena 1&quot;,
        &quot;city&quot;: &quot;Cartagena&quot;,
        &quot;created_at&quot;: &quot;2025-04-23T17:28:48.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:28:48.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Estaci&oacute;n Santa Marta 1&quot;,
        &quot;city&quot;: &quot;Santa Marta&quot;,
        &quot;created_at&quot;: &quot;2025-04-23T17:29:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:29:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Estaci&oacute;n Santa Marta 2&quot;,
        &quot;city&quot;: &quot;Santa Marta&quot;,
        &quot;created_at&quot;: &quot;2025-04-23T17:29:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:29:23.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Estaci&oacute;n Santa Marta 3&quot;,
        &quot;city&quot;: &quot;Santa Marta&quot;,
        &quot;created_at&quot;: &quot;2025-04-23T17:29:28.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:29:28.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Estaci&oacute;n Cartagena 2&quot;,
        &quot;city&quot;: &quot;Cartagena&quot;,
        &quot;created_at&quot;: &quot;2025-04-23T17:29:41.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:29:41.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Estaci&oacute;n Cartagena 3&quot;,
        &quot;city&quot;: &quot;Cartagena&quot;,
        &quot;created_at&quot;: &quot;2025-04-23T17:29:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:29:47.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-stations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-stations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-stations" data-method="GET"
      data-path="api/stations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-stations"
                    onclick="tryItOut('GETapi-stations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-stations"
                    onclick="cancelTryOut('GETapi-stations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-stations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-stations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-stations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-stations">POST api/stations</h2>

<p>
</p>



<span id="example-requests-POSTapi-stations">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/stations" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"city\": \"n\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stations"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "city": "n"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-stations">
</span>
<span id="execution-results-POSTapi-stations" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-stations"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-stations"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-stations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-stations">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-stations" data-method="POST"
      data-path="api/stations"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-stations', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-stations"
                    onclick="tryItOut('POSTapi-stations');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-stations"
                    onclick="cancelTryOut('POSTapi-stations');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-stations"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/stations</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-stations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-stations"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-stations"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="POSTapi-stations"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-stations--id-">GET api/stations/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-stations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/stations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stations/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stations--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Estaci&oacute;n 1&quot;,
    &quot;city&quot;: &quot;Medellin&quot;,
    &quot;created_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-stations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-stations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-stations--id-" data-method="GET"
      data-path="api/stations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-stations--id-"
                    onclick="tryItOut('GETapi-stations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-stations--id-"
                    onclick="cancelTryOut('GETapi-stations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-stations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-stations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-stations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-stations--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the station. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-stations--id-">PUT api/stations/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-stations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/stations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"city\": \"n\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stations/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "city": "n"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-stations--id-">
</span>
<span id="execution-results-PUTapi-stations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-stations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-stations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-stations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-stations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-stations--id-" data-method="PUT"
      data-path="api/stations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-stations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-stations--id-"
                    onclick="tryItOut('PUTapi-stations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-stations--id-"
                    onclick="cancelTryOut('PUTapi-stations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-stations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/stations/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/stations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-stations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-stations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-stations--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the station. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-stations--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>city</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="city"                data-endpoint="PUTapi-stations--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-stations--id-">DELETE api/stations/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-stations--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/stations/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/stations/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-stations--id-">
</span>
<span id="execution-results-DELETEapi-stations--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-stations--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-stations--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-stations--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-stations--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-stations--id-" data-method="DELETE"
      data-path="api/stations/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-stations--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-stations--id-"
                    onclick="tryItOut('DELETEapi-stations--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-stations--id-"
                    onclick="cancelTryOut('DELETEapi-stations--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-stations--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/stations/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-stations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-stations--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-stations--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the station. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-trains-available">GET api/trains/available</h2>

<p>
</p>



<span id="example-requests-GETapi-trains-available">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/trains/available" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/trains/available"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-trains-available">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;total&quot;: 2,
    &quot;trains&quot;: [
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Tren ligero&quot;,
            &quot;capacity&quot;: 25,
            &quot;created_at&quot;: &quot;2025-04-23T17:26:33.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:26:33.000000Z&quot;,
            &quot;is_active&quot;: 1
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Tren regional&quot;,
            &quot;capacity&quot;: 30,
            &quot;created_at&quot;: &quot;2025-04-23T17:27:03.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:27:03.000000Z&quot;,
            &quot;is_active&quot;: 1
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-trains-available" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-trains-available"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-trains-available"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-trains-available" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-trains-available">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-trains-available" data-method="GET"
      data-path="api/trains/available"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-trains-available', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-trains-available"
                    onclick="tryItOut('GETapi-trains-available');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-trains-available"
                    onclick="cancelTryOut('GETapi-trains-available');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-trains-available"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/trains/available</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-trains-available"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-trains-available"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-trains">GET api/trains</h2>

<p>
</p>



<span id="example-requests-GETapi-trains">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/trains" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/trains"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-trains">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Tren Bala&quot;,
        &quot;capacity&quot;: 50,
        &quot;created_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Tren suburbano&quot;,
        &quot;capacity&quot;: 2,
        &quot;created_at&quot;: &quot;2025-04-18T18:34:12.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-18T18:34:12.000000Z&quot;,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Tren ligero&quot;,
        &quot;capacity&quot;: 25,
        &quot;created_at&quot;: &quot;2025-04-23T17:26:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:26:33.000000Z&quot;,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Tren regional&quot;,
        &quot;capacity&quot;: 30,
        &quot;created_at&quot;: &quot;2025-04-23T17:27:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:27:03.000000Z&quot;,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Tren tur&iacute;stico&quot;,
        &quot;capacity&quot;: 50,
        &quot;created_at&quot;: &quot;2025-04-23T17:27:49.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:27:49.000000Z&quot;,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Tren Interurbano&quot;,
        &quot;capacity&quot;: 100,
        &quot;created_at&quot;: &quot;2025-04-26T20:56:50.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-26T20:57:09.000000Z&quot;,
        &quot;is_active&quot;: 1
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-trains" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-trains"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-trains"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-trains" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-trains">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-trains" data-method="GET"
      data-path="api/trains"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-trains', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-trains"
                    onclick="tryItOut('GETapi-trains');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-trains"
                    onclick="cancelTryOut('GETapi-trains');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-trains"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/trains</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-trains"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-trains"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-trains">POST api/trains</h2>

<p>
</p>



<span id="example-requests-POSTapi-trains">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/trains" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"capacity\": 22
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/trains"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "capacity": 22
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-trains">
</span>
<span id="execution-results-POSTapi-trains" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-trains"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-trains"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-trains" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-trains">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-trains" data-method="POST"
      data-path="api/trains"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-trains', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-trains"
                    onclick="tryItOut('POSTapi-trains');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-trains"
                    onclick="cancelTryOut('POSTapi-trains');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-trains"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/trains</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-trains"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-trains"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-trains"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>capacity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="capacity"                data-endpoint="POSTapi-trains"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>22</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-trains--id-">GET api/trains/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-trains--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/trains/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/trains/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-trains--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Tren Bala&quot;,
    &quot;capacity&quot;: 50,
    &quot;created_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
    &quot;is_active&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-trains--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-trains--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-trains--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-trains--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-trains--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-trains--id-" data-method="GET"
      data-path="api/trains/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-trains--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-trains--id-"
                    onclick="tryItOut('GETapi-trains--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-trains--id-"
                    onclick="cancelTryOut('GETapi-trains--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-trains--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/trains/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-trains--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-trains--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-trains--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the train. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-trains--id-">PUT api/trains/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-trains--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/trains/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"capacity\": 22
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/trains/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "capacity": 22
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-trains--id-">
</span>
<span id="execution-results-PUTapi-trains--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-trains--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-trains--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-trains--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-trains--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-trains--id-" data-method="PUT"
      data-path="api/trains/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-trains--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-trains--id-"
                    onclick="tryItOut('PUTapi-trains--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-trains--id-"
                    onclick="cancelTryOut('PUTapi-trains--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-trains--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/trains/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/trains/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-trains--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-trains--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-trains--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the train. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-trains--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>capacity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="capacity"                data-endpoint="PUTapi-trains--id-"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>22</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-trains--id-">DELETE api/trains/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-trains--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/trains/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/trains/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-trains--id-">
</span>
<span id="execution-results-DELETEapi-trains--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-trains--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-trains--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-trains--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-trains--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-trains--id-" data-method="DELETE"
      data-path="api/trains/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-trains--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-trains--id-"
                    onclick="tryItOut('DELETEapi-trains--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-trains--id-"
                    onclick="cancelTryOut('DELETEapi-trains--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-trains--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/trains/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-trains--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-trains--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-trains--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the train. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-routes">GET api/routes</h2>

<p>
</p>



<span id="example-requests-GETapi-routes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/routes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-routes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;train_id&quot;: 1,
        &quot;origin_station_id&quot;: 1,
        &quot;destination_station_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
        &quot;train&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Tren Bala&quot;,
            &quot;capacity&quot;: 50,
            &quot;created_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
            &quot;is_active&quot;: 1
        },
        &quot;origin&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Estaci&oacute;n 1&quot;,
            &quot;city&quot;: &quot;Medellin&quot;,
            &quot;created_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;
        },
        &quot;destination&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Estaci&oacute;n 5&quot;,
            &quot;city&quot;: &quot;Medellin&quot;,
            &quot;created_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 2,
        &quot;train_id&quot;: 2,
        &quot;origin_station_id&quot;: 5,
        &quot;destination_station_id&quot;: 1,
        &quot;created_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;,
        &quot;train&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Tren suburbano&quot;,
            &quot;capacity&quot;: 2,
            &quot;created_at&quot;: &quot;2025-04-18T18:34:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-18T18:34:12.000000Z&quot;,
            &quot;is_active&quot;: 1
        },
        &quot;origin&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Estaci&oacute;n 5&quot;,
            &quot;city&quot;: &quot;Medellin&quot;,
            &quot;created_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;
        },
        &quot;destination&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Estaci&oacute;n 1&quot;,
            &quot;city&quot;: &quot;Medellin&quot;,
            &quot;created_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 3,
        &quot;train_id&quot;: 5,
        &quot;origin_station_id&quot;: 9,
        &quot;destination_station_id&quot;: 8,
        &quot;created_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;,
        &quot;train&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Tren tur&iacute;stico&quot;,
            &quot;capacity&quot;: 50,
            &quot;created_at&quot;: &quot;2025-04-23T17:27:49.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:27:49.000000Z&quot;,
            &quot;is_active&quot;: 1
        },
        &quot;origin&quot;: {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Estaci&oacute;n Santa Marta 1&quot;,
            &quot;city&quot;: &quot;Santa Marta&quot;,
            &quot;created_at&quot;: &quot;2025-04-23T17:29:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:29:16.000000Z&quot;
        },
        &quot;destination&quot;: {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Estaci&oacute;n Cartagena 1&quot;,
            &quot;city&quot;: &quot;Cartagena&quot;,
            &quot;created_at&quot;: &quot;2025-04-23T17:28:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:28:48.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 4,
        &quot;train_id&quot;: 7,
        &quot;origin_station_id&quot;: 5,
        &quot;destination_station_id&quot;: 2,
        &quot;created_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
        &quot;train&quot;: {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Tren Interurbano&quot;,
            &quot;capacity&quot;: 100,
            &quot;created_at&quot;: &quot;2025-04-26T20:56:50.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-26T20:57:09.000000Z&quot;,
            &quot;is_active&quot;: 1
        },
        &quot;origin&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Estaci&oacute;n 5&quot;,
            &quot;city&quot;: &quot;Medellin&quot;,
            &quot;created_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;
        },
        &quot;destination&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Estaci&oacute;n 2&quot;,
            &quot;city&quot;: &quot;Medellin&quot;,
            &quot;created_at&quot;: &quot;2025-04-16T01:25:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:25:38.000000Z&quot;
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-routes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-routes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-routes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-routes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-routes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-routes" data-method="GET"
      data-path="api/routes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-routes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-routes"
                    onclick="tryItOut('GETapi-routes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-routes"
                    onclick="cancelTryOut('GETapi-routes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-routes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/routes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-routes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-routes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-routes">POST api/routes</h2>

<p>
</p>



<span id="example-requests-POSTapi-routes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/routes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"train_id\": \"architecto\",
    \"origin_station_id\": \"architecto\",
    \"destination_station_id\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "train_id": "architecto",
    "origin_station_id": "architecto",
    "destination_station_id": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-routes">
</span>
<span id="execution-results-POSTapi-routes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-routes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-routes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-routes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-routes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-routes" data-method="POST"
      data-path="api/routes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-routes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-routes"
                    onclick="tryItOut('POSTapi-routes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-routes"
                    onclick="cancelTryOut('POSTapi-routes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-routes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/routes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-routes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-routes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>train_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="train_id"                data-endpoint="POSTapi-routes"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the trains table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_station_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="origin_station_id"                data-endpoint="POSTapi-routes"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the stations table. The value and <code>destination_station_id</code> must be different. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_station_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="destination_station_id"                data-endpoint="POSTapi-routes"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the stations table. Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-routes--id-">GET api/routes/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-routes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/routes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-routes--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;train_id&quot;: 1,
    &quot;origin_station_id&quot;: 1,
    &quot;destination_station_id&quot;: 5,
    &quot;created_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
    &quot;train&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Tren Bala&quot;,
        &quot;capacity&quot;: 50,
        &quot;created_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
        &quot;is_active&quot;: 1
    },
    &quot;origin&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Estaci&oacute;n 1&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:23:42.000000Z&quot;
    },
    &quot;destination&quot;: {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Estaci&oacute;n 5&quot;,
        &quot;city&quot;: &quot;Medellin&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:25:56.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-routes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-routes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-routes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-routes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-routes--id-" data-method="GET"
      data-path="api/routes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-routes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-routes--id-"
                    onclick="tryItOut('GETapi-routes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-routes--id-"
                    onclick="cancelTryOut('GETapi-routes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-routes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/routes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-routes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-routes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-routes--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the route. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-routes--id-">PUT api/routes/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-routes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/routes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-routes--id-">
</span>
<span id="execution-results-PUTapi-routes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-routes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-routes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-routes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-routes--id-" data-method="PUT"
      data-path="api/routes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-routes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-routes--id-"
                    onclick="tryItOut('PUTapi-routes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-routes--id-"
                    onclick="cancelTryOut('PUTapi-routes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-routes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/routes/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/routes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-routes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-routes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-routes--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the route. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>traind_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="traind_id"                data-endpoint="PUTapi-routes--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the trains table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>origin_station_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="origin_station_id"                data-endpoint="PUTapi-routes--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the stations table. The value and <code>destination_station_id</code> must be different.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>destination_station_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="destination_station_id"                data-endpoint="PUTapi-routes--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the stations table.</p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-routes--id-">DELETE api/routes/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-routes--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/routes/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/routes/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-routes--id-">
</span>
<span id="execution-results-DELETEapi-routes--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-routes--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-routes--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-routes--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-routes--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-routes--id-" data-method="DELETE"
      data-path="api/routes/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-routes--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-routes--id-"
                    onclick="tryItOut('DELETEapi-routes--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-routes--id-"
                    onclick="cancelTryOut('DELETEapi-routes--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-routes--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/routes/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-routes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-routes--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-routes--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the route. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-trains--id--routes">GET api/trains/{id}/routes</h2>

<p>
</p>



<span id="example-requests-GETapi-trains--id--routes">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/trains/1/routes" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/trains/1/routes"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-trains--id--routes">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;train&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Tren Bala&quot;
    },
    &quot;routes&quot;: [
        {
            &quot;route_id&quot;: 1,
            &quot;origin&quot;: &quot;Estaci&oacute;n 1&quot;,
            &quot;destination&quot;: &quot;Estaci&oacute;n 5&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-trains--id--routes" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-trains--id--routes"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-trains--id--routes"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-trains--id--routes" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-trains--id--routes">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-trains--id--routes" data-method="GET"
      data-path="api/trains/{id}/routes"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-trains--id--routes', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-trains--id--routes"
                    onclick="tryItOut('GETapi-trains--id--routes');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-trains--id--routes"
                    onclick="cancelTryOut('GETapi-trains--id--routes');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-trains--id--routes"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/trains/{id}/routes</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-trains--id--routes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-trains--id--routes"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-trains--id--routes"
               value="1"
               data-component="url">
    <br>
<p>The ID of the train. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-trains--id--deactivate">PATCH api/trains/{id}/deactivate</h2>

<p>
</p>



<span id="example-requests-PATCHapi-trains--id--deactivate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/trains/1/deactivate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/trains/1/deactivate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-trains--id--deactivate">
</span>
<span id="execution-results-PATCHapi-trains--id--deactivate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-trains--id--deactivate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-trains--id--deactivate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-trains--id--deactivate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-trains--id--deactivate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-trains--id--deactivate" data-method="PATCH"
      data-path="api/trains/{id}/deactivate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-trains--id--deactivate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-trains--id--deactivate"
                    onclick="tryItOut('PATCHapi-trains--id--deactivate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-trains--id--deactivate"
                    onclick="cancelTryOut('PATCHapi-trains--id--deactivate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-trains--id--deactivate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/trains/{id}/deactivate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-trains--id--deactivate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-trains--id--deactivate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-trains--id--deactivate"
               value="1"
               data-component="url">
    <br>
<p>The ID of the train. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-schedules--id--seats-available">GET api/schedules/{id}/seats-available</h2>

<p>
</p>



<span id="example-requests-GETapi-schedules--id--seats-available">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/schedules/architecto/seats-available" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules/architecto/seats-available"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-schedules--id--seats-available">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\Schedule] architecto&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedules--id--seats-available" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedules--id--seats-available"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedules--id--seats-available"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-schedules--id--seats-available" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedules--id--seats-available">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-schedules--id--seats-available" data-method="GET"
      data-path="api/schedules/{id}/seats-available"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedules--id--seats-available', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedules--id--seats-available"
                    onclick="tryItOut('GETapi-schedules--id--seats-available');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedules--id--seats-available"
                    onclick="cancelTryOut('GETapi-schedules--id--seats-available');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedules--id--seats-available"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedules/{id}/seats-available</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-schedules--id--seats-available"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-schedules--id--seats-available"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-schedules--id--seats-available"
               value="architecto"
               data-component="url">
    <br>
<p>The ID of the schedule. Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-schedules-today">GET api/schedules/today</h2>

<p>
</p>



<span id="example-requests-GETapi-schedules-today">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/schedules/today" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules/today"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-schedules-today">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No hay horarios programados para hoy.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedules-today" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedules-today"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedules-today"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-schedules-today" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedules-today">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-schedules-today" data-method="GET"
      data-path="api/schedules/today"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedules-today', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedules-today"
                    onclick="tryItOut('GETapi-schedules-today');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedules-today"
                    onclick="cancelTryOut('GETapi-schedules-today');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedules-today"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedules/today</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-schedules-today"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-schedules-today"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-schedules-next">GET api/schedules/next</h2>

<p>
</p>



<span id="example-requests-GETapi-schedules-next">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/schedules/next" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules/next"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-schedules-next">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No hay horarios programados en las pr&oacute;ximas 24 horas.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedules-next" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedules-next"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedules-next"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-schedules-next" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedules-next">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-schedules-next" data-method="GET"
      data-path="api/schedules/next"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedules-next', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedules-next"
                    onclick="tryItOut('GETapi-schedules-next');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedules-next"
                    onclick="cancelTryOut('GETapi-schedules-next');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedules-next"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedules/next</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-schedules-next"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-schedules-next"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-schedules">GET api/schedules</h2>

<p>
</p>



<span id="example-requests-GETapi-schedules">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/schedules" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-schedules">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;route_id&quot;: 1,
        &quot;departure_time&quot;: &quot;2025-04-16 10:30:00&quot;,
        &quot;arrival_time&quot;: &quot;2025-04-16 13:15:00&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
        &quot;route&quot;: {
            &quot;id&quot;: 1,
            &quot;train_id&quot;: 1,
            &quot;origin_station_id&quot;: 1,
            &quot;destination_station_id&quot;: 5,
            &quot;created_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 2,
        &quot;route_id&quot;: 2,
        &quot;departure_time&quot;: &quot;2025-04-18 08:30:00&quot;,
        &quot;arrival_time&quot;: &quot;2025-04-18 10:00:00&quot;,
        &quot;created_at&quot;: &quot;2025-04-18T18:40:20.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-18T18:40:20.000000Z&quot;,
        &quot;route&quot;: {
            &quot;id&quot;: 2,
            &quot;train_id&quot;: 2,
            &quot;origin_station_id&quot;: 5,
            &quot;destination_station_id&quot;: 1,
            &quot;created_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 3,
        &quot;route_id&quot;: 3,
        &quot;departure_time&quot;: &quot;2025-04-22 08:30:00&quot;,
        &quot;arrival_time&quot;: &quot;2025-04-30 18:00:00&quot;,
        &quot;created_at&quot;: &quot;2025-04-23T17:32:59.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:32:59.000000Z&quot;,
        &quot;route&quot;: {
            &quot;id&quot;: 3,
            &quot;train_id&quot;: 5,
            &quot;origin_station_id&quot;: 9,
            &quot;destination_station_id&quot;: 8,
            &quot;created_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 4,
        &quot;route_id&quot;: 4,
        &quot;departure_time&quot;: &quot;2025-04-29 08:30:00&quot;,
        &quot;arrival_time&quot;: &quot;2025-04-29 16:00:00&quot;,
        &quot;created_at&quot;: &quot;2025-04-28T20:48:45.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-28T20:48:45.000000Z&quot;,
        &quot;route&quot;: {
            &quot;id&quot;: 4,
            &quot;train_id&quot;: 7,
            &quot;origin_station_id&quot;: 5,
            &quot;destination_station_id&quot;: 2,
            &quot;created_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 5,
        &quot;route_id&quot;: 4,
        &quot;departure_time&quot;: &quot;2025-04-29 08:30:00&quot;,
        &quot;arrival_time&quot;: &quot;2025-04-30 16:00:00&quot;,
        &quot;created_at&quot;: &quot;2025-04-28T21:05:11.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-28T21:05:11.000000Z&quot;,
        &quot;route&quot;: {
            &quot;id&quot;: 4,
            &quot;train_id&quot;: 7,
            &quot;origin_station_id&quot;: 5,
            &quot;destination_station_id&quot;: 2,
            &quot;created_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 6,
        &quot;route_id&quot;: 4,
        &quot;departure_time&quot;: &quot;2025-04-29 08:30:00&quot;,
        &quot;arrival_time&quot;: &quot;2025-04-30 08:30:00&quot;,
        &quot;created_at&quot;: &quot;2025-04-28T21:06:01.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-28T21:06:01.000000Z&quot;,
        &quot;route&quot;: {
            &quot;id&quot;: 4,
            &quot;train_id&quot;: 7,
            &quot;origin_station_id&quot;: 5,
            &quot;destination_station_id&quot;: 2,
            &quot;created_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;
        }
    },
    {
        &quot;id&quot;: 7,
        &quot;route_id&quot;: 4,
        &quot;departure_time&quot;: &quot;2025-04-30 08:30:00&quot;,
        &quot;arrival_time&quot;: &quot;2025-04-30 10:30:00&quot;,
        &quot;created_at&quot;: &quot;2025-04-28T21:07:14.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-28T21:07:14.000000Z&quot;,
        &quot;route&quot;: {
            &quot;id&quot;: 4,
            &quot;train_id&quot;: 7,
            &quot;origin_station_id&quot;: 5,
            &quot;destination_station_id&quot;: 2,
            &quot;created_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedules" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedules"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedules"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-schedules" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedules">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-schedules" data-method="GET"
      data-path="api/schedules"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedules', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedules"
                    onclick="tryItOut('GETapi-schedules');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedules"
                    onclick="cancelTryOut('GETapi-schedules');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedules"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedules</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-schedules"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-schedules"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-schedules">POST api/schedules</h2>

<p>
</p>



<span id="example-requests-POSTapi-schedules">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/schedules" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"route_id\": \"architecto\",
    \"departure_time\": \"2025-05-13T20:35:17\",
    \"arrival_time\": \"2051-06-06\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "route_id": "architecto",
    "departure_time": "2025-05-13T20:35:17",
    "arrival_time": "2051-06-06"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-schedules">
</span>
<span id="execution-results-POSTapi-schedules" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-schedules"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-schedules"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-schedules" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-schedules">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-schedules" data-method="POST"
      data-path="api/schedules"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-schedules', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-schedules"
                    onclick="tryItOut('POSTapi-schedules');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-schedules"
                    onclick="cancelTryOut('POSTapi-schedules');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-schedules"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/schedules</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-schedules"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-schedules"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>route_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="route_id"                data-endpoint="POSTapi-schedules"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the routes table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departure_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="departure_time"                data-endpoint="POSTapi-schedules"
               value="2025-05-13T20:35:17"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-05-13T20:35:17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>arrival_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="arrival_time"                data-endpoint="POSTapi-schedules"
               value="2051-06-06"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>departure_time</code>. Example: <code>2051-06-06</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-schedules--id-">GET api/schedules/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-schedules--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/schedules/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-schedules--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;route_id&quot;: 1,
    &quot;departure_time&quot;: &quot;2025-04-16 10:30:00&quot;,
    &quot;arrival_time&quot;: &quot;2025-04-16 13:15:00&quot;,
    &quot;created_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
    &quot;route&quot;: {
        &quot;id&quot;: 1,
        &quot;train_id&quot;: 1,
        &quot;origin_station_id&quot;: 1,
        &quot;destination_station_id&quot;: 5,
        &quot;created_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedules--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedules--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedules--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-schedules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedules--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-schedules--id-" data-method="GET"
      data-path="api/schedules/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedules--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedules--id-"
                    onclick="tryItOut('GETapi-schedules--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedules--id-"
                    onclick="cancelTryOut('GETapi-schedules--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedules--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedules/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-schedules--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the schedule. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-schedules--id-">PUT api/schedules/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-schedules--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/schedules/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"departure_time\": \"2025-05-13T20:35:17\",
    \"arrival_time\": \"2051-06-06\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "departure_time": "2025-05-13T20:35:17",
    "arrival_time": "2051-06-06"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-schedules--id-">
</span>
<span id="execution-results-PUTapi-schedules--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-schedules--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-schedules--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-schedules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-schedules--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-schedules--id-" data-method="PUT"
      data-path="api/schedules/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-schedules--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-schedules--id-"
                    onclick="tryItOut('PUTapi-schedules--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-schedules--id-"
                    onclick="cancelTryOut('PUTapi-schedules--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-schedules--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/schedules/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/schedules/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-schedules--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the schedule. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>route_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="route_id"                data-endpoint="PUTapi-schedules--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the routes table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>departure_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="departure_time"                data-endpoint="PUTapi-schedules--id-"
               value="2025-05-13T20:35:17"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-05-13T20:35:17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>arrival_time</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="arrival_time"                data-endpoint="PUTapi-schedules--id-"
               value="2051-06-06"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after <code>departure_time</code>. Example: <code>2051-06-06</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-schedules--id-">DELETE api/schedules/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-schedules--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/schedules/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-schedules--id-">
</span>
<span id="execution-results-DELETEapi-schedules--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-schedules--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-schedules--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-schedules--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-schedules--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-schedules--id-" data-method="DELETE"
      data-path="api/schedules/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-schedules--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-schedules--id-"
                    onclick="tryItOut('DELETEapi-schedules--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-schedules--id-"
                    onclick="cancelTryOut('DELETEapi-schedules--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-schedules--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/schedules/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-schedules--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-schedules--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the schedule. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-tickets-active">GET api/tickets/active</h2>

<p>
</p>



<span id="example-requests-GETapi-tickets-active">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tickets/active" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets/active"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tickets-active">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;total&quot;: 4,
    &quot;tickets&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;user_id&quot;: 1,
            &quot;schedule_id&quot;: 1,
            &quot;seat_number&quot;: 5,
            &quot;status&quot;: &quot;reserved&quot;,
            &quot;created_at&quot;: &quot;2025-04-17T00:20:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-05T19:48:26.000000Z&quot;,
            &quot;price&quot;: 0,
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Juan Perez&quot;,
                &quot;email&quot;: &quot;juan@example.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-04-17T00:19:30.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-24T19:59:32.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;is_active&quot;: 1
            },
            &quot;schedule&quot;: {
                &quot;id&quot;: 1,
                &quot;route_id&quot;: 1,
                &quot;departure_time&quot;: &quot;2025-04-16 10:30:00&quot;,
                &quot;arrival_time&quot;: &quot;2025-04-16 13:15:00&quot;,
                &quot;created_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
                &quot;route&quot;: {
                    &quot;id&quot;: 1,
                    &quot;train_id&quot;: 1,
                    &quot;origin_station_id&quot;: 1,
                    &quot;destination_station_id&quot;: 5,
                    &quot;created_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
                    &quot;train&quot;: {
                        &quot;id&quot;: 1,
                        &quot;name&quot;: &quot;Tren Bala&quot;,
                        &quot;capacity&quot;: 50,
                        &quot;created_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-04-16T01:38:55.000000Z&quot;,
                        &quot;is_active&quot;: 1
                    }
                }
            }
        },
        {
            &quot;id&quot;: 2,
            &quot;user_id&quot;: 2,
            &quot;schedule_id&quot;: 2,
            &quot;seat_number&quot;: 1,
            &quot;status&quot;: &quot;reserved&quot;,
            &quot;created_at&quot;: &quot;2025-04-18T18:59:01.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-18T18:59:01.000000Z&quot;,
            &quot;price&quot;: 0,
            &quot;user&quot;: {
                &quot;id&quot;: 2,
                &quot;name&quot;: &quot;Alejandra Gomez&quot;,
                &quot;email&quot;: &quot;aleja@example.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-04-18T18:41:17.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-18T18:41:17.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;is_active&quot;: 1
            },
            &quot;schedule&quot;: {
                &quot;id&quot;: 2,
                &quot;route_id&quot;: 2,
                &quot;departure_time&quot;: &quot;2025-04-18 08:30:00&quot;,
                &quot;arrival_time&quot;: &quot;2025-04-18 10:00:00&quot;,
                &quot;created_at&quot;: &quot;2025-04-18T18:40:20.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-18T18:40:20.000000Z&quot;,
                &quot;route&quot;: {
                    &quot;id&quot;: 2,
                    &quot;train_id&quot;: 2,
                    &quot;origin_station_id&quot;: 5,
                    &quot;destination_station_id&quot;: 1,
                    &quot;created_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;,
                    &quot;train&quot;: {
                        &quot;id&quot;: 2,
                        &quot;name&quot;: &quot;Tren suburbano&quot;,
                        &quot;capacity&quot;: 2,
                        &quot;created_at&quot;: &quot;2025-04-18T18:34:12.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-04-18T18:34:12.000000Z&quot;,
                        &quot;is_active&quot;: 1
                    }
                }
            }
        },
        {
            &quot;id&quot;: 5,
            &quot;user_id&quot;: 5,
            &quot;schedule_id&quot;: 3,
            &quot;seat_number&quot;: 11,
            &quot;status&quot;: &quot;reserved&quot;,
            &quot;created_at&quot;: &quot;2025-04-26T20:44:48.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-26T20:44:48.000000Z&quot;,
            &quot;price&quot;: 0,
            &quot;user&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;santiago&quot;,
                &quot;email&quot;: &quot;santi@example.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-04-21T20:41:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-22T20:56:50.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;is_active&quot;: 1
            },
            &quot;schedule&quot;: {
                &quot;id&quot;: 3,
                &quot;route_id&quot;: 3,
                &quot;departure_time&quot;: &quot;2025-04-22 08:30:00&quot;,
                &quot;arrival_time&quot;: &quot;2025-04-30 18:00:00&quot;,
                &quot;created_at&quot;: &quot;2025-04-23T17:32:59.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-23T17:32:59.000000Z&quot;,
                &quot;route&quot;: {
                    &quot;id&quot;: 3,
                    &quot;train_id&quot;: 5,
                    &quot;origin_station_id&quot;: 9,
                    &quot;destination_station_id&quot;: 8,
                    &quot;created_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;,
                    &quot;train&quot;: {
                        &quot;id&quot;: 5,
                        &quot;name&quot;: &quot;Tren tur&iacute;stico&quot;,
                        &quot;capacity&quot;: 50,
                        &quot;created_at&quot;: &quot;2025-04-23T17:27:49.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-04-23T17:27:49.000000Z&quot;,
                        &quot;is_active&quot;: 1
                    }
                }
            }
        },
        {
            &quot;id&quot;: 6,
            &quot;user_id&quot;: 5,
            &quot;schedule_id&quot;: 4,
            &quot;seat_number&quot;: 1,
            &quot;status&quot;: &quot;reserved&quot;,
            &quot;created_at&quot;: &quot;2025-05-05T19:55:17.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-05T19:55:17.000000Z&quot;,
            &quot;price&quot;: 0,
            &quot;user&quot;: {
                &quot;id&quot;: 5,
                &quot;name&quot;: &quot;santiago&quot;,
                &quot;email&quot;: &quot;santi@example.com&quot;,
                &quot;email_verified_at&quot;: null,
                &quot;created_at&quot;: &quot;2025-04-21T20:41:50.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-22T20:56:50.000000Z&quot;,
                &quot;deleted_at&quot;: null,
                &quot;is_active&quot;: 1
            },
            &quot;schedule&quot;: {
                &quot;id&quot;: 4,
                &quot;route_id&quot;: 4,
                &quot;departure_time&quot;: &quot;2025-04-29 08:30:00&quot;,
                &quot;arrival_time&quot;: &quot;2025-04-29 16:00:00&quot;,
                &quot;created_at&quot;: &quot;2025-04-28T20:48:45.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-28T20:48:45.000000Z&quot;,
                &quot;route&quot;: {
                    &quot;id&quot;: 4,
                    &quot;train_id&quot;: 7,
                    &quot;origin_station_id&quot;: 5,
                    &quot;destination_station_id&quot;: 2,
                    &quot;created_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
                    &quot;train&quot;: {
                        &quot;id&quot;: 7,
                        &quot;name&quot;: &quot;Tren Interurbano&quot;,
                        &quot;capacity&quot;: 100,
                        &quot;created_at&quot;: &quot;2025-04-26T20:56:50.000000Z&quot;,
                        &quot;updated_at&quot;: &quot;2025-04-26T20:57:09.000000Z&quot;,
                        &quot;is_active&quot;: 1
                    }
                }
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tickets-active" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tickets-active"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tickets-active"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tickets-active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tickets-active">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tickets-active" data-method="GET"
      data-path="api/tickets/active"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tickets-active', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tickets-active"
                    onclick="tryItOut('GETapi-tickets-active');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tickets-active"
                    onclick="cancelTryOut('GETapi-tickets-active');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tickets-active"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tickets/active</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tickets-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tickets-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tickets">GET api/tickets</h2>

<p>
</p>



<span id="example-requests-GETapi-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tickets" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tickets">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;user_id&quot;: 1,
        &quot;schedule_id&quot;: 1,
        &quot;seat_number&quot;: 5,
        &quot;status&quot;: &quot;reserved&quot;,
        &quot;created_at&quot;: &quot;2025-04-17T00:20:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-05T19:48:26.000000Z&quot;,
        &quot;price&quot;: 0,
        &quot;user&quot;: {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Juan Perez&quot;,
            &quot;email&quot;: &quot;juan@example.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-04-17T00:19:30.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-24T19:59:32.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;is_active&quot;: 1
        },
        &quot;schedule&quot;: {
            &quot;id&quot;: 1,
            &quot;route_id&quot;: 1,
            &quot;departure_time&quot;: &quot;2025-04-16 10:30:00&quot;,
            &quot;arrival_time&quot;: &quot;2025-04-16 13:15:00&quot;,
            &quot;created_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
            &quot;route&quot;: {
                &quot;id&quot;: 1,
                &quot;train_id&quot;: 1,
                &quot;origin_station_id&quot;: 1,
                &quot;destination_station_id&quot;: 5,
                &quot;created_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;
            }
        }
    },
    {
        &quot;id&quot;: 2,
        &quot;user_id&quot;: 2,
        &quot;schedule_id&quot;: 2,
        &quot;seat_number&quot;: 1,
        &quot;status&quot;: &quot;reserved&quot;,
        &quot;created_at&quot;: &quot;2025-04-18T18:59:01.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-18T18:59:01.000000Z&quot;,
        &quot;price&quot;: 0,
        &quot;user&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Alejandra Gomez&quot;,
            &quot;email&quot;: &quot;aleja@example.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-04-18T18:41:17.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-18T18:41:17.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;is_active&quot;: 1
        },
        &quot;schedule&quot;: {
            &quot;id&quot;: 2,
            &quot;route_id&quot;: 2,
            &quot;departure_time&quot;: &quot;2025-04-18 08:30:00&quot;,
            &quot;arrival_time&quot;: &quot;2025-04-18 10:00:00&quot;,
            &quot;created_at&quot;: &quot;2025-04-18T18:40:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-18T18:40:20.000000Z&quot;,
            &quot;route&quot;: {
                &quot;id&quot;: 2,
                &quot;train_id&quot;: 2,
                &quot;origin_station_id&quot;: 5,
                &quot;destination_station_id&quot;: 1,
                &quot;created_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;
            }
        }
    },
    {
        &quot;id&quot;: 3,
        &quot;user_id&quot;: 2,
        &quot;schedule_id&quot;: 2,
        &quot;seat_number&quot;: 2,
        &quot;status&quot;: &quot;used&quot;,
        &quot;created_at&quot;: &quot;2025-04-18T18:59:21.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-24T19:28:41.000000Z&quot;,
        &quot;price&quot;: 0,
        &quot;user&quot;: {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Alejandra Gomez&quot;,
            &quot;email&quot;: &quot;aleja@example.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-04-18T18:41:17.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-18T18:41:17.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;is_active&quot;: 1
        },
        &quot;schedule&quot;: {
            &quot;id&quot;: 2,
            &quot;route_id&quot;: 2,
            &quot;departure_time&quot;: &quot;2025-04-18 08:30:00&quot;,
            &quot;arrival_time&quot;: &quot;2025-04-18 10:00:00&quot;,
            &quot;created_at&quot;: &quot;2025-04-18T18:40:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-18T18:40:20.000000Z&quot;,
            &quot;route&quot;: {
                &quot;id&quot;: 2,
                &quot;train_id&quot;: 2,
                &quot;origin_station_id&quot;: 5,
                &quot;destination_station_id&quot;: 1,
                &quot;created_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-18T18:35:07.000000Z&quot;
            }
        }
    },
    {
        &quot;id&quot;: 4,
        &quot;user_id&quot;: 6,
        &quot;schedule_id&quot;: 3,
        &quot;seat_number&quot;: 10,
        &quot;status&quot;: &quot;cancelled&quot;,
        &quot;created_at&quot;: &quot;2025-04-23T17:36:35.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T21:18:47.000000Z&quot;,
        &quot;price&quot;: 0,
        &quot;user&quot;: {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Will Smith&quot;,
            &quot;email&quot;: &quot;will@example.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-04-23T17:35:14.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:35:14.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;is_active&quot;: 1
        },
        &quot;schedule&quot;: {
            &quot;id&quot;: 3,
            &quot;route_id&quot;: 3,
            &quot;departure_time&quot;: &quot;2025-04-22 08:30:00&quot;,
            &quot;arrival_time&quot;: &quot;2025-04-30 18:00:00&quot;,
            &quot;created_at&quot;: &quot;2025-04-23T17:32:59.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:32:59.000000Z&quot;,
            &quot;route&quot;: {
                &quot;id&quot;: 3,
                &quot;train_id&quot;: 5,
                &quot;origin_station_id&quot;: 9,
                &quot;destination_station_id&quot;: 8,
                &quot;created_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;
            }
        }
    },
    {
        &quot;id&quot;: 5,
        &quot;user_id&quot;: 5,
        &quot;schedule_id&quot;: 3,
        &quot;seat_number&quot;: 11,
        &quot;status&quot;: &quot;reserved&quot;,
        &quot;created_at&quot;: &quot;2025-04-26T20:44:48.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-26T20:44:48.000000Z&quot;,
        &quot;price&quot;: 0,
        &quot;user&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;santiago&quot;,
            &quot;email&quot;: &quot;santi@example.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-04-21T20:41:50.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-22T20:56:50.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;is_active&quot;: 1
        },
        &quot;schedule&quot;: {
            &quot;id&quot;: 3,
            &quot;route_id&quot;: 3,
            &quot;departure_time&quot;: &quot;2025-04-22 08:30:00&quot;,
            &quot;arrival_time&quot;: &quot;2025-04-30 18:00:00&quot;,
            &quot;created_at&quot;: &quot;2025-04-23T17:32:59.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-23T17:32:59.000000Z&quot;,
            &quot;route&quot;: {
                &quot;id&quot;: 3,
                &quot;train_id&quot;: 5,
                &quot;origin_station_id&quot;: 9,
                &quot;destination_station_id&quot;: 8,
                &quot;created_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-23T17:32:12.000000Z&quot;
            }
        }
    },
    {
        &quot;id&quot;: 6,
        &quot;user_id&quot;: 5,
        &quot;schedule_id&quot;: 4,
        &quot;seat_number&quot;: 1,
        &quot;status&quot;: &quot;reserved&quot;,
        &quot;created_at&quot;: &quot;2025-05-05T19:55:17.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-05-05T19:55:17.000000Z&quot;,
        &quot;price&quot;: 0,
        &quot;user&quot;: {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;santiago&quot;,
            &quot;email&quot;: &quot;santi@example.com&quot;,
            &quot;email_verified_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-04-21T20:41:50.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-22T20:56:50.000000Z&quot;,
            &quot;deleted_at&quot;: null,
            &quot;is_active&quot;: 1
        },
        &quot;schedule&quot;: {
            &quot;id&quot;: 4,
            &quot;route_id&quot;: 4,
            &quot;departure_time&quot;: &quot;2025-04-29 08:30:00&quot;,
            &quot;arrival_time&quot;: &quot;2025-04-29 16:00:00&quot;,
            &quot;created_at&quot;: &quot;2025-04-28T20:48:45.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-28T20:48:45.000000Z&quot;,
            &quot;route&quot;: {
                &quot;id&quot;: 4,
                &quot;train_id&quot;: 7,
                &quot;origin_station_id&quot;: 5,
                &quot;destination_station_id&quot;: 2,
                &quot;created_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-04-26T21:32:53.000000Z&quot;
            }
        }
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tickets" data-method="GET"
      data-path="api/tickets"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tickets"
                    onclick="tryItOut('GETapi-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tickets"
                    onclick="cancelTryOut('GETapi-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-tickets">POST api/tickets</h2>

<p>
</p>



<span id="example-requests-POSTapi-tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tickets" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": \"architecto\",
    \"schedule_id\": \"architecto\",
    \"seat_number\": 22,
    \"status\": \"cancelled\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "architecto",
    "schedule_id": "architecto",
    "seat_number": 22,
    "status": "cancelled"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tickets">
</span>
<span id="execution-results-POSTapi-tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tickets" data-method="POST"
      data-path="api/tickets"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tickets"
                    onclick="tryItOut('POSTapi-tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tickets"
                    onclick="cancelTryOut('POSTapi-tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-tickets"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>schedule_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="schedule_id"                data-endpoint="POSTapi-tickets"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the schedules table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>seat_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="seat_number"                data-endpoint="POSTapi-tickets"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>22</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-tickets"
               value="cancelled"
               data-component="body">
    <br>
<p>Example: <code>cancelled</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>reserved</code></li> <li><code>cancelled</code></li> <li><code>used</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-tickets--id-">GET api/tickets/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tickets/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tickets--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;user_id&quot;: 1,
    &quot;schedule_id&quot;: 1,
    &quot;seat_number&quot;: 5,
    &quot;status&quot;: &quot;reserved&quot;,
    &quot;created_at&quot;: &quot;2025-04-17T00:20:16.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-05-05T19:48:26.000000Z&quot;,
    &quot;price&quot;: 0,
    &quot;user&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Juan Perez&quot;,
        &quot;email&quot;: &quot;juan@example.com&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-04-17T00:19:30.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-24T19:59:32.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;is_active&quot;: 1
    },
    &quot;schedule&quot;: {
        &quot;id&quot;: 1,
        &quot;route_id&quot;: 1,
        &quot;departure_time&quot;: &quot;2025-04-16 10:30:00&quot;,
        &quot;arrival_time&quot;: &quot;2025-04-16 13:15:00&quot;,
        &quot;created_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-16T22:39:39.000000Z&quot;,
        &quot;route&quot;: {
            &quot;id&quot;: 1,
            &quot;train_id&quot;: 1,
            &quot;origin_station_id&quot;: 1,
            &quot;destination_station_id&quot;: 5,
            &quot;created_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-04-16T01:40:38.000000Z&quot;
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tickets--id-" data-method="GET"
      data-path="api/tickets/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tickets--id-"
                    onclick="tryItOut('GETapi-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tickets--id-"
                    onclick="cancelTryOut('GETapi-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-tickets--id-">PUT api/tickets/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/tickets/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"seat_number\": 16,
    \"status\": \"reserved\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "seat_number": 16,
    "status": "reserved"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tickets--id-">
</span>
<span id="execution-results-PUTapi-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tickets--id-" data-method="PUT"
      data-path="api/tickets/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tickets--id-"
                    onclick="tryItOut('PUTapi-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tickets--id-"
                    onclick="cancelTryOut('PUTapi-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tickets/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="PUTapi-tickets--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>schedule_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="schedule_id"                data-endpoint="PUTapi-tickets--id-"
               value=""
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the schedules table.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>seat_number</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="seat_number"                data-endpoint="PUTapi-tickets--id-"
               value="16"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-tickets--id-"
               value="reserved"
               data-component="body">
    <br>
<p>Example: <code>reserved</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>reserved</code></li> <li><code>cancelled</code></li> <li><code>used</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-tickets--id-">DELETE api/tickets/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-tickets--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/tickets/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-tickets--id-">
</span>
<span id="execution-results-DELETEapi-tickets--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tickets--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tickets--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-tickets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tickets--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-tickets--id-" data-method="DELETE"
      data-path="api/tickets/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tickets--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tickets--id-"
                    onclick="tryItOut('DELETEapi-tickets--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tickets--id-"
                    onclick="cancelTryOut('DELETEapi-tickets--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tickets--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tickets/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-tickets--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-tickets--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-schedules--id--users">GET api/schedules/{id}/users</h2>

<p>
</p>



<span id="example-requests-GETapi-schedules--id--users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/schedules/1/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/schedules/1/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-schedules--id--users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-schedules--id--users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-schedules--id--users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-schedules--id--users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-schedules--id--users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-schedules--id--users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-schedules--id--users" data-method="GET"
      data-path="api/schedules/{id}/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-schedules--id--users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-schedules--id--users"
                    onclick="tryItOut('GETapi-schedules--id--users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-schedules--id--users"
                    onclick="cancelTryOut('GETapi-schedules--id--users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-schedules--id--users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/schedules/{id}/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-schedules--id--users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-schedules--id--users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-schedules--id--users"
               value="1"
               data-component="url">
    <br>
<p>The ID of the schedule. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-tickets-schedule--id-">GET api/tickets/schedule/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-tickets-schedule--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tickets/schedule/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets/schedule/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tickets-schedule--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;schedule_id&quot;: &quot;1&quot;,
    &quot;tickets&quot;: [
        {
            &quot;ticket_id&quot;: 1,
            &quot;user&quot;: {
                &quot;id&quot;: 1,
                &quot;name&quot;: &quot;Juan Perez&quot;,
                &quot;email&quot;: &quot;juan@example.com&quot;
            },
            &quot;seat_number&quot;: 5,
            &quot;status&quot;: &quot;reserved&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tickets-schedule--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tickets-schedule--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tickets-schedule--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tickets-schedule--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tickets-schedule--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tickets-schedule--id-" data-method="GET"
      data-path="api/tickets/schedule/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tickets-schedule--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tickets-schedule--id-"
                    onclick="tryItOut('GETapi-tickets-schedule--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tickets-schedule--id-"
                    onclick="cancelTryOut('GETapi-tickets-schedule--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tickets-schedule--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tickets/schedule/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tickets-schedule--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tickets-schedule--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-tickets-schedule--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the schedule. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-tickets-history-user--id-">GET api/tickets/history/user/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-tickets-history-user--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tickets/history/user/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets/history/user/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tickets-history-user--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;user&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Juan Perez&quot;,
        &quot;email&quot;: &quot;juan@example.com&quot;
    },
    &quot;tickets&quot;: [
        {
            &quot;ticket_id&quot;: 1,
            &quot;seat_number&quot;: 5,
            &quot;status&quot;: &quot;reserved&quot;,
            &quot;schedule&quot;: {
                &quot;departure_time&quot;: &quot;2025-04-16 10:30:00&quot;,
                &quot;arrival_time&quot;: &quot;2025-04-16 13:15:00&quot;
            },
            &quot;route&quot;: {
                &quot;origin&quot;: &quot;Estaci&oacute;n 1&quot;,
                &quot;destination&quot;: &quot;Estaci&oacute;n 5&quot;,
                &quot;train&quot;: &quot;Tren Bala&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tickets-history-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tickets-history-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tickets-history-user--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tickets-history-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tickets-history-user--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tickets-history-user--id-" data-method="GET"
      data-path="api/tickets/history/user/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tickets-history-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tickets-history-user--id-"
                    onclick="tryItOut('GETapi-tickets-history-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tickets-history-user--id-"
                    onclick="cancelTryOut('GETapi-tickets-history-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tickets-history-user--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tickets/history/user/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tickets-history-user--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tickets-history-user--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-tickets-history-user--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-tickets--id--use">POST api/tickets/{id}/use</h2>

<p>
</p>



<span id="example-requests-POSTapi-tickets--id--use">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tickets/1/use" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets/1/use"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tickets--id--use">
</span>
<span id="execution-results-POSTapi-tickets--id--use" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tickets--id--use"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tickets--id--use"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tickets--id--use" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tickets--id--use">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tickets--id--use" data-method="POST"
      data-path="api/tickets/{id}/use"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tickets--id--use', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tickets--id--use"
                    onclick="tryItOut('POSTapi-tickets--id--use');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tickets--id--use"
                    onclick="cancelTryOut('POSTapi-tickets--id--use');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tickets--id--use"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tickets/{id}/use</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tickets--id--use"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tickets--id--use"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-tickets--id--use"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-tickets--id--cancel">POST api/tickets/{id}/cancel</h2>

<p>
</p>



<span id="example-requests-POSTapi-tickets--id--cancel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tickets/1/cancel" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tickets/1/cancel"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tickets--id--cancel">
</span>
<span id="execution-results-POSTapi-tickets--id--cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tickets--id--cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tickets--id--cancel"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tickets--id--cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tickets--id--cancel">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tickets--id--cancel" data-method="POST"
      data-path="api/tickets/{id}/cancel"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tickets--id--cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tickets--id--cancel"
                    onclick="tryItOut('POSTapi-tickets--id--cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tickets--id--cancel"
                    onclick="cancelTryOut('POSTapi-tickets--id--cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tickets--id--cancel"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tickets/{id}/cancel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tickets--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tickets--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="POSTapi-tickets--id--cancel"
               value="1"
               data-component="url">
    <br>
<p>The ID of the ticket. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-users-search">GET api/users/search</h2>

<p>
</p>



<span id="example-requests-GETapi-users-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users-search">
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Par&aacute;metro \&quot;name\&quot; requerido para la b&uacute;squeda.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users-search" data-method="GET"
      data-path="api/users/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-search"
                    onclick="tryItOut('GETapi-users-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-search"
                    onclick="cancelTryOut('GETapi-users-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-users">GET api/users</h2>

<p>
</p>



<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Juan Perez&quot;,
        &quot;email&quot;: &quot;juan@example.com&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-04-17T00:19:30.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-24T19:59:32.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Alejandra Gomez&quot;,
        &quot;email&quot;: &quot;aleja@example.com&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-04-18T18:41:17.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-18T18:41:17.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Matt Shadows&quot;,
        &quot;email&quot;: &quot;matt@example.com&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-04-18T19:08:41.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-18T19:08:41.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Matt hinc&quot;,
        &quot;email&quot;: &quot;matt@gmail.com&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-04-21T20:11:04.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-21T20:11:04.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;santiago&quot;,
        &quot;email&quot;: &quot;santi@example.com&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-04-21T20:41:50.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-22T20:56:50.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Will Smith&quot;,
        &quot;email&quot;: &quot;will@example.com&quot;,
        &quot;email_verified_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-04-23T17:35:14.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-04-23T17:35:14.000000Z&quot;,
        &quot;deleted_at&quot;: null,
        &quot;is_active&quot;: 1
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-users">POST api/users</h2>

<p>
</p>



<span id="example-requests-POSTapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users">
</span>
<span id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users" data-method="POST"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users"
                    onclick="tryItOut('POSTapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users"
                    onclick="cancelTryOut('POSTapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-users"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-users"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-users"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-users--id-">GET api/users/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Juan Perez&quot;,
    &quot;email&quot;: &quot;juan@example.com&quot;,
    &quot;email_verified_at&quot;: null,
    &quot;created_at&quot;: &quot;2025-04-17T00:19:30.000000Z&quot;,
    &quot;updated_at&quot;: &quot;2025-04-24T19:59:32.000000Z&quot;,
    &quot;deleted_at&quot;: null,
    &quot;is_active&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--id-" data-method="GET"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id-"
                    onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id-"
                    onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-users--id-">PUT api/users/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--id-">
</span>
<span id="execution-results-PUTapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-users--id-" data-method="PUT"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--id-"
                    onclick="tryItOut('PUTapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--id-"
                    onclick="cancelTryOut('PUTapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-users--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-users--id-"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTapi-users--id-"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-users--id-">DELETE api/users/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--id-">
</span>
<span id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-users--id-" data-method="DELETE"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--id-"
                    onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--id-"
                    onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-users-trashed">GET api/users/trashed</h2>

<p>
</p>



<span id="example-requests-GETapi-users-trashed">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/trashed" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/trashed"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users-trashed">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;No query results for model [App\\Models\\User] trashed&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users-trashed" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users-trashed"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users-trashed"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users-trashed" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users-trashed">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users-trashed" data-method="GET"
      data-path="api/users/trashed"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users-trashed', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users-trashed"
                    onclick="tryItOut('GETapi-users-trashed');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users-trashed"
                    onclick="cancelTryOut('GETapi-users-trashed');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users-trashed"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/trashed</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users-trashed"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users-trashed"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-users--id--tickets">GET api/users/{id}/tickets</h2>

<p>
</p>



<span id="example-requests-GETapi-users--id--tickets">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/users/1/tickets" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/1/tickets"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id--tickets">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;user&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Juan Perez&quot;,
        &quot;email&quot;: &quot;juan@example.com&quot;
    },
    &quot;tickets&quot;: [
        {
            &quot;ticket_id&quot;: 1,
            &quot;seat_number&quot;: 5,
            &quot;status&quot;: &quot;reserved&quot;,
            &quot;schedule&quot;: {
                &quot;departure_time&quot;: &quot;2025-04-16 10:30:00&quot;,
                &quot;arrival_time&quot;: &quot;2025-04-16 13:15:00&quot;
            },
            &quot;route&quot;: {
                &quot;origin&quot;: &quot;Estaci&oacute;n 1&quot;,
                &quot;destination&quot;: &quot;Estaci&oacute;n 5&quot;,
                &quot;train&quot;: &quot;Tren Bala&quot;
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id--tickets" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id--tickets"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id--tickets"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--id--tickets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id--tickets">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--id--tickets" data-method="GET"
      data-path="api/users/{id}/tickets"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id--tickets', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id--tickets"
                    onclick="tryItOut('GETapi-users--id--tickets');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id--tickets"
                    onclick="cancelTryOut('GETapi-users--id--tickets');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id--tickets"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}/tickets</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--id--tickets"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-users--id--tickets"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-users--id--restore">PUT api/users/{id}/restore</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--id--restore">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/users/1/restore" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/1/restore"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--id--restore">
</span>
<span id="execution-results-PUTapi-users--id--restore" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--id--restore"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id--restore"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-users--id--restore" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id--restore">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-users--id--restore" data-method="PUT"
      data-path="api/users/{id}/restore"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id--restore', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--id--restore"
                    onclick="tryItOut('PUTapi-users--id--restore');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--id--restore"
                    onclick="cancelTryOut('PUTapi-users--id--restore');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--id--restore"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{id}/restore</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-users--id--restore"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-users--id--restore"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-users--id--restore"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PATCHapi-users--id--deactivate">PATCH api/users/{id}/deactivate</h2>

<p>
</p>



<span id="example-requests-PATCHapi-users--id--deactivate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PATCH \
    "http://localhost/api/users/1/deactivate" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/users/1/deactivate"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PATCH",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PATCHapi-users--id--deactivate">
</span>
<span id="execution-results-PATCHapi-users--id--deactivate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PATCHapi-users--id--deactivate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PATCHapi-users--id--deactivate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PATCHapi-users--id--deactivate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PATCHapi-users--id--deactivate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PATCHapi-users--id--deactivate" data-method="PATCH"
      data-path="api/users/{id}/deactivate"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PATCHapi-users--id--deactivate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PATCHapi-users--id--deactivate"
                    onclick="tryItOut('PATCHapi-users--id--deactivate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PATCHapi-users--id--deactivate"
                    onclick="cancelTryOut('PATCHapi-users--id--deactivate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PATCHapi-users--id--deactivate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/users/{id}/deactivate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PATCHapi-users--id--deactivate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PATCHapi-users--id--deactivate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PATCHapi-users--id--deactivate"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-reports-train-usage">GET api/reports/train-usage</h2>

<p>
</p>



<span id="example-requests-GETapi-reports-train-usage">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/reports/train-usage" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reports/train-usage"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-reports-train-usage">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;total_trains&quot;: 6,
    &quot;report&quot;: [
        {
            &quot;train_id&quot;: 1,
            &quot;train_name&quot;: &quot;Tren Bala&quot;,
            &quot;total_schedules&quot;: 1,
            &quot;capacity_per_schedule&quot;: 50,
            &quot;total_seats&quot;: 50,
            &quot;reserved_tickets&quot;: 1,
            &quot;usage_percentage&quot;: 2
        },
        {
            &quot;train_id&quot;: 2,
            &quot;train_name&quot;: &quot;Tren suburbano&quot;,
            &quot;total_schedules&quot;: 1,
            &quot;capacity_per_schedule&quot;: 2,
            &quot;total_seats&quot;: 2,
            &quot;reserved_tickets&quot;: 1,
            &quot;usage_percentage&quot;: 50
        },
        {
            &quot;train_id&quot;: 3,
            &quot;train_name&quot;: &quot;Tren ligero&quot;,
            &quot;total_schedules&quot;: 0,
            &quot;capacity_per_schedule&quot;: 25,
            &quot;total_seats&quot;: 0,
            &quot;reserved_tickets&quot;: 0,
            &quot;usage_percentage&quot;: 0
        },
        {
            &quot;train_id&quot;: 4,
            &quot;train_name&quot;: &quot;Tren regional&quot;,
            &quot;total_schedules&quot;: 0,
            &quot;capacity_per_schedule&quot;: 30,
            &quot;total_seats&quot;: 0,
            &quot;reserved_tickets&quot;: 0,
            &quot;usage_percentage&quot;: 0
        },
        {
            &quot;train_id&quot;: 5,
            &quot;train_name&quot;: &quot;Tren tur&iacute;stico&quot;,
            &quot;total_schedules&quot;: 1,
            &quot;capacity_per_schedule&quot;: 50,
            &quot;total_seats&quot;: 50,
            &quot;reserved_tickets&quot;: 1,
            &quot;usage_percentage&quot;: 2
        },
        {
            &quot;train_id&quot;: 7,
            &quot;train_name&quot;: &quot;Tren Interurbano&quot;,
            &quot;total_schedules&quot;: 4,
            &quot;capacity_per_schedule&quot;: 100,
            &quot;total_seats&quot;: 400,
            &quot;reserved_tickets&quot;: 1,
            &quot;usage_percentage&quot;: 0.25
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-reports-train-usage" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-reports-train-usage"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reports-train-usage"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-reports-train-usage" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reports-train-usage">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-reports-train-usage" data-method="GET"
      data-path="api/reports/train-usage"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-reports-train-usage', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-reports-train-usage"
                    onclick="tryItOut('GETapi-reports-train-usage');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-reports-train-usage"
                    onclick="cancelTryOut('GETapi-reports-train-usage');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-reports-train-usage"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/reports/train-usage</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-reports-train-usage"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-reports-train-usage"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-reports-income">GET api/reports/income</h2>

<p>
</p>



<span id="example-requests-GETapi-reports-income">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/reports/income" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/reports/income"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-reports-income">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;total_income&quot;: 0,
    &quot;total_tickets&quot;: 5,
    &quot;breakdown_by_schedule&quot;: {
        &quot;1&quot;: {
            &quot;tickets_sold&quot;: 1,
            &quot;income&quot;: 0
        },
        &quot;2&quot;: {
            &quot;tickets_sold&quot;: 2,
            &quot;income&quot;: 0
        },
        &quot;3&quot;: {
            &quot;tickets_sold&quot;: 1,
            &quot;income&quot;: 0
        },
        &quot;4&quot;: {
            &quot;tickets_sold&quot;: 1,
            &quot;income&quot;: 0
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-reports-income" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-reports-income"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-reports-income"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-reports-income" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-reports-income">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-reports-income" data-method="GET"
      data-path="api/reports/income"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-reports-income', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-reports-income"
                    onclick="tryItOut('GETapi-reports-income');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-reports-income"
                    onclick="cancelTryOut('GETapi-reports-income');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-reports-income"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/reports/income</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-reports-income"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-reports-income"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
