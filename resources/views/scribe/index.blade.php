<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://tijara.test";
        var useCsrf = Boolean(1);
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.24.1.js") }}"></script>

    <script src="{{ asset("vendor/scribe/js/theme-default-3.24.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
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
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authentication">
                    <a href="#authentication">Authentication</a>
                </li>
                                    <ul id="tocify-subheader-authentication" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="authentication-POSTapi-v1-login">
                        <a href="#authentication-POSTapi-v1-login">Log in the user.</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="cart">
                    <a href="#cart">Cart</a>
                </li>
                                    <ul id="tocify-subheader-cart" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="cart-POSTapi-products--product--cart-item-increase">
                        <a href="#cart-POSTapi-products--product--cart-item-increase">Increase cart item quantity</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="cart-GETapi-user-cart">
                        <a href="#cart-GETapi-user-cart">User&#039;s active cart info.</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="cart-POSTapi-products--product--cart-item">
                        <a href="#cart-POSTapi-products--product--cart-item">Add cart item</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="cart-DELETEapi-products--product--cart-item">
                        <a href="#cart-DELETEapi-products--product--cart-item">Remove cart item</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="cart-DELETEapi-products--product--cart-item-decreases">
                        <a href="#cart-DELETEapi-products--product--cart-item-decreases">Decrease cart item quantity</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-4" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-temporary-media">
                        <a href="#endpoints-POSTapi-temporary-media">POST api/temporary-media</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-5" class="tocify-header">
                <li class="tocify-item level-1" data-unique="inventory">
                    <a href="#inventory">Inventory</a>
                </li>
                                    <ul id="tocify-subheader-inventory" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="inventory-GETapi-products--product--inventories">
                        <a href="#inventory-GETapi-products--product--inventories">Inventory Info</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="inventory-POSTapi-products--product--inventories">
                        <a href="#inventory-POSTapi-products--product--inventories">Add Inventory</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="inventory-DELETEapi-products--product--inventories">
                        <a href="#inventory-DELETEapi-products--product--inventories">Remove Inventory</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-6" class="tocify-header">
                <li class="tocify-item level-1" data-unique="manufacturing">
                    <a href="#manufacturing">Manufacturing</a>
                </li>
                                    <ul id="tocify-subheader-manufacturing" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="manufacturing-POSTapi-products">
                        <a href="#manufacturing-POSTapi-products">Create Product</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="manufacturing-POSTapi-categories">
                        <a href="#manufacturing-POSTapi-categories">Create Category</a>
                    </li>
                                    <li class="tocify-item level-2" data-unique="manufacturing-GETapi-categories">
                        <a href="#manufacturing-GETapi-categories">Retrieve all categories.</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: March 17 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://tijara.test</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is authenticated by sending an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="authentication">Authentication</h1>

    <p>API endpoints for managing authentication</p>

            <h2 id="authentication-POSTapi-v1-login">Log in the user.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tijara.test/api/v1/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"admin@gmail.com\",
    \"password\": \"password\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/v1/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "admin@gmail.com",
    "password": "password"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;token&quot;: &quot;eyJ0eXA...&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-v1-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-login"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-login"></code></pre>
</span>
<form id="form-POSTapi-v1-login" data-method="POST"
      data-path="api/v1/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-login"
                    onclick="tryItOut('POSTapi-v1-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-login"
                    onclick="cancelTryOut('POSTapi-v1-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/login</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTapi-v1-login"
               value="admin@gmail.com"
               data-component="body" hidden>
    <br>
<p>The email of the  user.</p>
        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTapi-v1-login"
               value="password"
               data-component="body" hidden>
    <br>
<p>The password of the  user.</p>
        </p>
        </form>

        <h1 id="cart">Cart</h1>

    

            <h2 id="cart-POSTapi-products--product--cart-item-increase">Increase cart item quantity</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-products--product--cart-item-increase">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tijara.test/api/products/facere/cart-item/increase" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/products/facere/cart-item/increase"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products--product--cart-item-increase">
</span>
<span id="execution-results-POSTapi-products--product--cart-item-increase" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products--product--cart-item-increase"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products--product--cart-item-increase"></code></pre>
</span>
<span id="execution-error-POSTapi-products--product--cart-item-increase" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products--product--cart-item-increase"></code></pre>
</span>
<form id="form-POSTapi-products--product--cart-item-increase" data-method="POST"
      data-path="api/products/{product}/cart-item/increase"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products--product--cart-item-increase', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products--product--cart-item-increase"
                    onclick="tryItOut('POSTapi-products--product--cart-item-increase');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products--product--cart-item-increase"
                    onclick="cancelTryOut('POSTapi-products--product--cart-item-increase');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products--product--cart-item-increase" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products/{product}/cart-item/increase</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-products--product--cart-item-increase" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-products--product--cart-item-increase"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product"
               data-endpoint="POSTapi-products--product--cart-item-increase"
               value="facere"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="cart-GETapi-user-cart">User&#039;s active cart info.</h2>

<p>
</p>



<span id="example-requests-GETapi-user-cart">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tijara.test/api/user/cart" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/user/cart"
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

<span id="example-responses-GETapi-user-cart">
            <blockquote>
            <p>Example response (200, Has active cart, But empty):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;status&quot;: &quot;down&quot;,
    &quot;services&quot;: {
        &quot;database&quot;: &quot;up&quot;,
        &quot;redis&quot;: &quot;down&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user-cart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user-cart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user-cart"></code></pre>
</span>
<span id="execution-error-GETapi-user-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user-cart"></code></pre>
</span>
<form id="form-GETapi-user-cart" data-method="GET"
      data-path="api/user/cart"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user-cart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user-cart"
                    onclick="tryItOut('GETapi-user-cart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user-cart"
                    onclick="cancelTryOut('GETapi-user-cart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user-cart" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/cart</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
                <input type="number"
               name="id"
               data-endpoint="GETapi-user-cart"
               value="88683"
               data-component="url" hidden>
    <br>
<p>The user's ID.</p>
            </p>
                    </form>

            <h2 id="cart-POSTapi-products--product--cart-item">Add cart item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-products--product--cart-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tijara.test/api/products/enim/cart-item" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/products/enim/cart-item"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products--product--cart-item">
</span>
<span id="execution-results-POSTapi-products--product--cart-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products--product--cart-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products--product--cart-item"></code></pre>
</span>
<span id="execution-error-POSTapi-products--product--cart-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products--product--cart-item"></code></pre>
</span>
<form id="form-POSTapi-products--product--cart-item" data-method="POST"
      data-path="api/products/{product}/cart-item"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products--product--cart-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products--product--cart-item"
                    onclick="tryItOut('POSTapi-products--product--cart-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products--product--cart-item"
                    onclick="cancelTryOut('POSTapi-products--product--cart-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products--product--cart-item" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products/{product}/cart-item</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-products--product--cart-item" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-products--product--cart-item"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product"
               data-endpoint="POSTapi-products--product--cart-item"
               value="enim"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="cart-DELETEapi-products--product--cart-item">Remove cart item</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-products--product--cart-item">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tijara.test/api/products/molestiae/cart-item" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/products/molestiae/cart-item"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--product--cart-item">
</span>
<span id="execution-results-DELETEapi-products--product--cart-item" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--product--cart-item"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--product--cart-item"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--product--cart-item" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--product--cart-item"></code></pre>
</span>
<form id="form-DELETEapi-products--product--cart-item" data-method="DELETE"
      data-path="api/products/{product}/cart-item"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--product--cart-item', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--product--cart-item"
                    onclick="tryItOut('DELETEapi-products--product--cart-item');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--product--cart-item"
                    onclick="cancelTryOut('DELETEapi-products--product--cart-item');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--product--cart-item" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{product}/cart-item</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-products--product--cart-item" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-products--product--cart-item"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product"
               data-endpoint="DELETEapi-products--product--cart-item"
               value="molestiae"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="cart-DELETEapi-products--product--cart-item-decreases">Decrease cart item quantity</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-products--product--cart-item-decreases">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tijara.test/api/products/modi/cart-item/decreases" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/products/modi/cart-item/decreases"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--product--cart-item-decreases">
</span>
<span id="execution-results-DELETEapi-products--product--cart-item-decreases" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--product--cart-item-decreases"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--product--cart-item-decreases"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--product--cart-item-decreases" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--product--cart-item-decreases"></code></pre>
</span>
<form id="form-DELETEapi-products--product--cart-item-decreases" data-method="DELETE"
      data-path="api/products/{product}/cart-item/decreases"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--product--cart-item-decreases', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--product--cart-item-decreases"
                    onclick="tryItOut('DELETEapi-products--product--cart-item-decreases');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--product--cart-item-decreases"
                    onclick="cancelTryOut('DELETEapi-products--product--cart-item-decreases');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--product--cart-item-decreases" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{product}/cart-item/decreases</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-products--product--cart-item-decreases" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-products--product--cart-item-decreases"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product"
               data-endpoint="DELETEapi-products--product--cart-item-decreases"
               value="modi"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-POSTapi-temporary-media">POST api/temporary-media</h2>

<p>
</p>



<span id="example-requests-POSTapi-temporary-media">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tijara.test/api/temporary-media" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/temporary-media"
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

<span id="example-responses-POSTapi-temporary-media">
</span>
<span id="execution-results-POSTapi-temporary-media" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-temporary-media"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-temporary-media"></code></pre>
</span>
<span id="execution-error-POSTapi-temporary-media" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-temporary-media"></code></pre>
</span>
<form id="form-POSTapi-temporary-media" data-method="POST"
      data-path="api/temporary-media"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-temporary-media', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-temporary-media"
                    onclick="tryItOut('POSTapi-temporary-media');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-temporary-media"
                    onclick="cancelTryOut('POSTapi-temporary-media');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-temporary-media" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/temporary-media</code></b>
        </p>
                    </form>

        <h1 id="inventory">Inventory</h1>

    

            <h2 id="inventory-GETapi-products--product--inventories">Inventory Info</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products--product--inventories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tijara.test/api/products/quae/inventories" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/products/quae/inventories"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products--product--inventories">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for type uuid: \&quot;quae\&quot;\nCONTEXT:  unnamed portal parameter $1 = &#039;...&#039; (SQL: select * from \&quot;products\&quot; where \&quot;uuid\&quot; = quae limit 1)&quot;,
    &quot;exception&quot;: &quot;Illuminate\\Database\\QueryException&quot;,
    &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
    &quot;line&quot;: 716,
    &quot;trace&quot;: [
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
            &quot;line&quot;: 676,
            &quot;function&quot;: &quot;runQueryCallback&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Connection.php&quot;,
            &quot;line&quot;: 376,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2556,
            &quot;function&quot;: &quot;select&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Connection&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2544,
            &quot;function&quot;: &quot;runSelect&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 3078,
            &quot;function&quot;: &quot;Illuminate\\Database\\Query\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Query/Builder.php&quot;,
            &quot;line&quot;: 2545,
            &quot;function&quot;: &quot;onceWithColumns&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 673,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Query\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Builder.php&quot;,
            &quot;line&quot;: 657,
            &quot;function&quot;: &quot;getModels&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Concerns/BuildsQueries.php&quot;,
            &quot;line&quot;: 296,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php&quot;,
            &quot;line&quot;: 1885,
            &quot;function&quot;: &quot;first&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Builder&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/ImplicitRouteBinding.php&quot;,
            &quot;line&quot;: 59,
            &quot;function&quot;: &quot;resolveRouteBinding&quot;,
            &quot;class&quot;: &quot;Illuminate\\Database\\Eloquent\\Model&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 875,
            &quot;function&quot;: &quot;resolveForRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\ImplicitRouteBinding&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Middleware/SubstituteBindings.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;substituteImplicitBindings&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\SubstituteBindings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 126,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;handleRequest&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Middleware/ThrottleRequests.php&quot;,
            &quot;line&quot;: 54,
            &quot;function&quot;: &quot;handleRequestUsingNamedLimiter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Middleware\\ThrottleRequests&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Auth/Middleware/Authenticate.php&quot;,
            &quot;line&quot;: 44,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Auth\\Middleware\\Authenticate&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/sanctum/src/Http/Middleware/EnsureFrontendRequestsAreStateful.php&quot;,
            &quot;line&quot;: 33,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Laravel\\Sanctum\\Http\\Middleware\\{closure}&quot;,
            &quot;class&quot;: &quot;Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/sanctum/src/Http/Middleware/EnsureFrontendRequestsAreStateful.php&quot;,
            &quot;line&quot;: 34,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 727,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 702,
            &quot;function&quot;: &quot;runRouteWithinStack&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 666,
            &quot;function&quot;: &quot;runRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Routing/Router.php&quot;,
            &quot;line&quot;: 655,
            &quot;function&quot;: &quot;dispatchToRoute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 167,
            &quot;function&quot;: &quot;dispatch&quot;,
            &quot;class&quot;: &quot;Illuminate\\Routing\\Router&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 141,
            &quot;function&quot;: &quot;Illuminate\\Foundation\\Http\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/app/Http/Middleware/ValidateMedia.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;App\\Http\\Middleware\\ValidateMedia&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ConvertEmptyStringsToNull.php&quot;,
            &quot;line&quot;: 31,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TransformsRequest.php&quot;,
            &quot;line&quot;: 21,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/TrimStrings.php&quot;,
            &quot;line&quot;: 40,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\TrimStrings&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/ValidatePostSize.php&quot;,
            &quot;line&quot;: 27,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/PreventRequestsDuringMaintenance.php&quot;,
            &quot;line&quot;: 86,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Http/Middleware/HandleCors.php&quot;,
            &quot;line&quot;: 62,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\HandleCors&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Http/Middleware/TrustProxies.php&quot;,
            &quot;line&quot;: 39,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 180,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Http\\Middleware\\TrustProxies&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;Illuminate\\Pipeline\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 142,
            &quot;function&quot;: &quot;then&quot;,
            &quot;class&quot;: &quot;Illuminate\\Pipeline\\Pipeline&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php&quot;,
            &quot;line&quot;: 111,
            &quot;function&quot;: &quot;sendRequestThroughRouter&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Http\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 287,
            &quot;function&quot;: &quot;callLaravelOrLumenRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 89,
            &quot;function&quot;: &quot;makeApiCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 45,
            &quot;function&quot;: &quot;makeResponseCall&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Extracting/Strategies/Responses/ResponseCalls.php&quot;,
            &quot;line&quot;: 35,
            &quot;function&quot;: &quot;makeResponseCallIfConditionsPass&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 222,
            &quot;function&quot;: &quot;__invoke&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 179,
            &quot;function&quot;: &quot;iterateThroughStrategies&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Extracting/Extractor.php&quot;,
            &quot;line&quot;: 116,
            &quot;function&quot;: &quot;fetchResponses&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 117,
            &quot;function&quot;: &quot;processRoute&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Extracting\\Extractor&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 75,
            &quot;function&quot;: &quot;extractEndpointsInfoFromLaravelApp&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/GroupedEndpoints/GroupedEndpointsFromApp.php&quot;,
            &quot;line&quot;: 51,
            &quot;function&quot;: &quot;extractEndpointsInfoAndWriteToDisk&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/knuckleswtf/scribe/src/Commands/GenerateDocumentation.php&quot;,
            &quot;line&quot;: 49,
            &quot;function&quot;: &quot;get&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\GroupedEndpoints\\GroupedEndpointsFromApp&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 36,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Knuckles\\Scribe\\Commands\\GenerateDocumentation&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Container/Util.php&quot;,
            &quot;line&quot;: 41,
            &quot;function&quot;: &quot;Illuminate\\Container\\{closure}&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 93,
            &quot;function&quot;: &quot;unwrapIfClosure&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Util&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;callBoundMethod&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Container/Container.php&quot;,
            &quot;line&quot;: 653,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\BoundMethod&quot;,
            &quot;type&quot;: &quot;::&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 136,
            &quot;function&quot;: &quot;call&quot;,
            &quot;class&quot;: &quot;Illuminate\\Container\\Container&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/symfony/console/Command/Command.php&quot;,
            &quot;line&quot;: 291,
            &quot;function&quot;: &quot;execute&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Console/Command.php&quot;,
            &quot;line&quot;: 121,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Command\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 989,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Command&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 299,
            &quot;function&quot;: &quot;doRunCommand&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/symfony/console/Application.php&quot;,
            &quot;line&quot;: 171,
            &quot;function&quot;: &quot;doRun&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Console/Application.php&quot;,
            &quot;line&quot;: 102,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Symfony\\Component\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/vendor/laravel/framework/src/Illuminate/Foundation/Console/Kernel.php&quot;,
            &quot;line&quot;: 129,
            &quot;function&quot;: &quot;run&quot;,
            &quot;class&quot;: &quot;Illuminate\\Console\\Application&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        },
        {
            &quot;file&quot;: &quot;/Users/wedevs/code/tijara/artisan&quot;,
            &quot;line&quot;: 37,
            &quot;function&quot;: &quot;handle&quot;,
            &quot;class&quot;: &quot;Illuminate\\Foundation\\Console\\Kernel&quot;,
            &quot;type&quot;: &quot;-&gt;&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--product--inventories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--product--inventories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--product--inventories"></code></pre>
</span>
<span id="execution-error-GETapi-products--product--inventories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--product--inventories"></code></pre>
</span>
<form id="form-GETapi-products--product--inventories" data-method="GET"
      data-path="api/products/{product}/inventories"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--product--inventories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--product--inventories"
                    onclick="tryItOut('GETapi-products--product--inventories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--product--inventories"
                    onclick="cancelTryOut('GETapi-products--product--inventories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--product--inventories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{product}/inventories</code></b>
        </p>
                <p>
            <label id="auth-GETapi-products--product--inventories" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="GETapi-products--product--inventories"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product"
               data-endpoint="GETapi-products--product--inventories"
               value="quae"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="inventory-POSTapi-products--product--inventories">Add Inventory</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-products--product--inventories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tijara.test/api/products/maxime/inventories" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/products/maxime/inventories"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products--product--inventories">
</span>
<span id="execution-results-POSTapi-products--product--inventories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products--product--inventories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products--product--inventories"></code></pre>
</span>
<span id="execution-error-POSTapi-products--product--inventories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products--product--inventories"></code></pre>
</span>
<form id="form-POSTapi-products--product--inventories" data-method="POST"
      data-path="api/products/{product}/inventories"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products--product--inventories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products--product--inventories"
                    onclick="tryItOut('POSTapi-products--product--inventories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products--product--inventories"
                    onclick="cancelTryOut('POSTapi-products--product--inventories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products--product--inventories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products/{product}/inventories</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-products--product--inventories" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-products--product--inventories"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product"
               data-endpoint="POSTapi-products--product--inventories"
               value="maxime"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

            <h2 id="inventory-DELETEapi-products--product--inventories">Remove Inventory</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-products--product--inventories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://tijara.test/api/products/excepturi/inventories" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/products/excepturi/inventories"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--product--inventories">
</span>
<span id="execution-results-DELETEapi-products--product--inventories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--product--inventories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--product--inventories"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--product--inventories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--product--inventories"></code></pre>
</span>
<form id="form-DELETEapi-products--product--inventories" data-method="DELETE"
      data-path="api/products/{product}/inventories"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--product--inventories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--product--inventories"
                    onclick="tryItOut('DELETEapi-products--product--inventories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--product--inventories"
                    onclick="cancelTryOut('DELETEapi-products--product--inventories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--product--inventories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{product}/inventories</code></b>
        </p>
                <p>
            <label id="auth-DELETEapi-products--product--inventories" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="DELETEapi-products--product--inventories"
                                                                data-component="header"></label>
        </p>
                <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="product"
               data-endpoint="DELETEapi-products--product--inventories"
               value="excepturi"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

        <h1 id="manufacturing">Manufacturing</h1>

    

            <h2 id="manufacturing-POSTapi-products">Create Product</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tijara.test/api/products" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"blgourafqmbiyzxvkchdeulxvnehsyqurl\",
    \"description\": \"sreludahadofxpfckpzonjdukbwctkwhwozatuylobokwidpsioluirzisqlxcikchnnuvcwmlsaemacxjxaqsriusspqfxquvjkaswwpkctrnmclycyyucononxcmvzzbyddxbw\",
    \"category_uuid\": \"221661df-376c-33d9-9a3e-de36abe2d2da\",
    \"medias\": \"d\",
    \"sku\": \"lercwluexswedcvnnrimizimvdiasqypixcmrizvsrgwcwnndbvtocxypwjnyccidgyowrgxokmatbmwrpqmzxualnztrjrglqkpmfbvmtyusiuubqoitmwthihrpboluhtuqnltczeyymznmpyvsimwwpdphsggyjuavxljmgmmrreerwzrkhzjjiglpwkgduaxbknmszrmlflgwxzjwvzjvmlgbogvmsitbzsmpgvpa\",
    \"track_quantity\": \"ipsum\",
    \"status\": \"molestiae\",
    \"price\": 0,
    \"compare_at_price\": 0,
    \"cost_per_item\": 0,
    \"inventory_qty\": 0,
    \"physical_product\": \"earum\",
    \"weight\": 0
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/products"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "blgourafqmbiyzxvkchdeulxvnehsyqurl",
    "description": "sreludahadofxpfckpzonjdukbwctkwhwozatuylobokwidpsioluirzisqlxcikchnnuvcwmlsaemacxjxaqsriusspqfxquvjkaswwpkctrnmclycyyucononxcmvzzbyddxbw",
    "category_uuid": "221661df-376c-33d9-9a3e-de36abe2d2da",
    "medias": "d",
    "sku": "lercwluexswedcvnnrimizimvdiasqypixcmrizvsrgwcwnndbvtocxypwjnyccidgyowrgxokmatbmwrpqmzxualnztrjrglqkpmfbvmtyusiuubqoitmwthihrpboluhtuqnltczeyymznmpyvsimwwpdphsggyjuavxljmgmmrreerwzrkhzjjiglpwkgduaxbknmszrmlflgwxzjwvzjvmlgbogvmsitbzsmpgvpa",
    "track_quantity": "ipsum",
    "status": "molestiae",
    "price": 0,
    "compare_at_price": 0,
    "cost_per_item": 0,
    "inventory_qty": 0,
    "physical_product": "earum",
    "weight": 0
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products">
</span>
<span id="execution-results-POSTapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products"></code></pre>
</span>
<span id="execution-error-POSTapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products"></code></pre>
</span>
<form id="form-POSTapi-products" data-method="POST"
      data-path="api/products"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products"
                    onclick="tryItOut('POSTapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products"
                    onclick="cancelTryOut('POSTapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products</code></b>
        </p>
                <p>
            <label id="auth-POSTapi-products" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTapi-products"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="uuid"
               data-endpoint="POSTapi-products"
               value=""
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>title</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-products"
               value="blgourafqmbiyzxvkchdeulxvnehsyqurl"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-products"
               value="sreludahadofxpfckpzonjdukbwctkwhwozatuylobokwidpsioluirzisqlxcikchnnuvcwmlsaemacxjxaqsriusspqfxquvjkaswwpkctrnmclycyyucononxcmvzzbyddxbw"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>category_uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="category_uuid"
               data-endpoint="POSTapi-products"
               value="221661df-376c-33d9-9a3e-de36abe2d2da"
               data-component="body" hidden>
    <br>
<p>Must be a valid UUID.</p>
        </p>
                <p>
            <b><code>medias</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="medias[0]"
               data-endpoint="POSTapi-products"
               data-component="body" hidden>
        <input type="text"
               name="medias[1]"
               data-endpoint="POSTapi-products"
               data-component="body" hidden>
    <br>
<p>Must not have more than 3 items.</p>
        </p>
                <p>
            <b><code>sku</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
                <input type="text"
               name="sku"
               data-endpoint="POSTapi-products"
               value="lercwluexswedcvnnrimizimvdiasqypixcmrizvsrgwcwnndbvtocxypwjnyccidgyowrgxokmatbmwrpqmzxualnztrjrglqkpmfbvmtyusiuubqoitmwthihrpboluhtuqnltczeyymznmpyvsimwwpdphsggyjuavxljmgmmrreerwzrkhzjjiglpwkgduaxbknmszrmlflgwxzjwvzjvmlgbogvmsitbzsmpgvpa"
               data-component="body" hidden>
    <br>
<p>Must not be greater than 255 characters.</p>
        </p>
                <p>
            <b><code>track_quantity</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="track_quantity"
               data-endpoint="POSTapi-products"
               value="ipsum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="status"
               data-endpoint="POSTapi-products"
               value="molestiae"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
                <input type="number"
               name="price"
               data-endpoint="POSTapi-products"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
                <p>
            <b><code>compare_at_price</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="compare_at_price"
               data-endpoint="POSTapi-products"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
                <p>
            <b><code>cost_per_item</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="cost_per_item"
               data-endpoint="POSTapi-products"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
                <p>
            <b><code>inventory_qty</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="inventory_qty"
               data-endpoint="POSTapi-products"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
                <p>
            <b><code>physical_product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="physical_product"
               data-endpoint="POSTapi-products"
               value="earum"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>weight</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
                <input type="number"
               name="weight"
               data-endpoint="POSTapi-products"
               value="0"
               data-component="body" hidden>
    <br>
<p>Must be at least 0.</p>
        </p>
        </form>

            <h2 id="manufacturing-POSTapi-categories">Create Category</h2>

<p>
</p>



<span id="example-requests-POSTapi-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://tijara.test/api/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/categories"
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

<span id="example-responses-POSTapi-categories">
</span>
<span id="execution-results-POSTapi-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-categories"></code></pre>
</span>
<span id="execution-error-POSTapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-categories"></code></pre>
</span>
<form id="form-POSTapi-categories" data-method="POST"
      data-path="api/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-categories"
                    onclick="tryItOut('POSTapi-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-categories"
                    onclick="cancelTryOut('POSTapi-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/categories</code></b>
        </p>
                    </form>

            <h2 id="manufacturing-GETapi-categories">Retrieve all categories.</h2>

<p>
</p>



<span id="example-requests-GETapi-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://tijara.test/api/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://tijara.test/api/categories"
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

<span id="example-responses-GETapi-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;uuid&quot;: &quot;8527fc2c-02f1-4b9f-8999-aa0f40e520f0&quot;,
        &quot;title&quot;: &quot;H2FmetFc&quot;,
        &quot;description&quot;: null,
        &quot;parent_uuid&quot;: null,
        &quot;created_at&quot;: &quot;2022-03-17T03:35:36.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2022-03-17T03:35:36.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"></code></pre>
</span>
<span id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories"></code></pre>
</span>
<form id="form-GETapi-categories" data-method="GET"
      data-path="api/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories"
                    onclick="tryItOut('GETapi-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories"
                    onclick="cancelTryOut('GETapi-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories</code></b>
        </p>
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
