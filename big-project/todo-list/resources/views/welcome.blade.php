<!DOCTYPE html><html><head><meta charset="utf-8"><title>Laravel API</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}body{color:black;background:white;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid #ededed;margin-bottom:12px}h1,h2,h3,h4,h5{color:black;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:36px}h2{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:#18bc9c;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(0,0,0,0) 20%, rgba(0,0,0,0.2) 51.4%, rgba(255,255,255,0.2) 51.4%, rgba(255,255,255,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(0,0,0,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #e8e8e8}blockquote p:last-child{margin-bottom:0}pre{background-color:#f5f5f5;padding:12px;border:1px solid #cfcfcf;border-radius:6px;overflow:auto}pre code{color:black;background-color:transparent;padding:0;border:none}code{color:#444;background-color:#f5f5f5;font:'Inconsolata',monospace;padding:1px 4px;border:1px solid #cfcfcf;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#fafafa}table th,table td{padding:6px 12px;border:1px solid #e6e6e6}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:200 36px 'Raleway',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:black;background-color:#eff7fc;border-left:4px solid #3498db}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#3498db}.warning{color:black;background-color:#fcf0ef;border-left:4px solid #d62c1a}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#d62c1a}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:black;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(0,0,0,0.7);padding:8px 12px;border-top:1px solid #ededed;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid black}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:#000;background-color:#ededed;border-radius:10px;margin:-2px 0}.badge.get{color:white;background-color:#3498db}.badge.head{color:white;background-color:#3498db}.badge.options{color:white;background-color:#3498db}.badge.put{color:white;background-color:#f39c12}.badge.patch{color:white;background-color:#f39c12}.badge.post{color:white;background-color:#18bc9c}.badge.delete{color:white;background-color:#e74c3c}.collapse-button{float:right}.collapse-button .close{display:none;color:#18bc9c;cursor:pointer}.collapse-button .open{color:#18bc9c;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:16.5%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:16.5%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:51.5%;padding-right:12px}.right{box-sizing:border-box;float:right;width:48.5%;padding-left:12px}.right a{color:#18bc9c}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:white}.right pre{background-color:#1d1f21;border:1px solid #1d1f21}.right pre code{color:#c5c8c6}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e80b8}.definition .method.head{color:#2e80b8}.definition .method.options{color:#2e80b8}.definition .method.post{color:#2eb89d}.definition .method.put{color:#b8822e}.definition .method.patch{color:#b8822e}.definition .method.delete{color:#b83b2e}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:6px}.example-names .tab-button{cursor:pointer;color:black;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#444}.right .example-names .tab-button{color:white;border:1px solid #666;border-radius:6px}.right .example-names .tab-button.active{background-color:#5e5e5e}#nav-background{position:fixed;left:0;top:0;bottom:0;width:16.5%;padding-right:14.4px;background-color:#fbfbfb;border-right:1px solid #f0f0f0;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:48.6%;background-color:#333;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:48.6%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(0,0,0,0.5);background-color:#ededed;text-decoration:none !important;border-top:1px solid #ededed;border-left:1px solid #ededed;border-right:1px solid #ededed;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px;margin-bottom:12px;background-color:white;border:1px solid #ededed;border-radius:6px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px;margin:-12px -12px 12px -12px;background-color:#ededed;border-bottom:1px solid #ededed;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid #ededed}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:6px}.action h4.action-heading{padding:6px 12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:6px;border-top-right-radius:6px;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal;padding:6px 0}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:3px;display:inline-block}.action h4.action-heading .method.get{color:#000;background-color:white}.action h4.action-heading .method.head{color:#000;background-color:white}.action h4.action-heading .method.options{color:#000;background-color:white}.action h4.action-heading .method.put{color:#000;background-color:white}.action h4.action-heading .method.patch{color:#000;background-color:white}.action h4.action-heading .method.post{color:#000;background-color:white}.action h4.action-heading .method.delete{color:#000;background-color:white}.action h4.action-heading code{color:#444;background-color:rgba(255,255,255,0.7);border-color:transparent;font-weight:normal;word-break:break-all;display:inline-block;margin-top:2px}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid white;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#3498db}.action.get h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.head{border-color:#3498db}.action.head h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.options{border-color:#3498db}.action.options h4.action-heading{color:white;background:#3498db;border-bottom-color:#3498db}.action.post{border-color:#18bc9c}.action.post h4.action-heading{color:white;background:#18bc9c;border-bottom-color:#18bc9c}.action.put{border-color:#f39c12}.action.put h4.action-heading{color:white;background:#f39c12;border-bottom-color:#f39c12}.action.patch{border-color:#f39c12}.action.patch h4.action-heading{color:white;background:#f39c12;border-bottom-color:#f39c12}.action.delete{border-color:#e74c3c}.action.delete h4.action-heading{color:white;background:#e74c3c;border-bottom-color:#e74c3c}</style></head><body class="preload"><div id="nav-background"></div><div class="container-fluid triple"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#top">Overview</a></div><div class="collapse-content"><ul><li><a href="#header-authentication">Authentication</a></li><li><a href="#header-headers">Headers</a></li><li><a href="#header-errors">Errors</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#auth">Auth</a></div><div class="collapse-content"><ul><li><a href="#auth-tokens-post"><span class="badge post"><i class="fa fa-plus"></i></span>Get a token</a></li><li><a href="#auth-register-post"><span class="badge post"><i class="fa fa-plus"></i></span>Register user</a></li><li><a href="#auth-password-recovery">Password Recovery</a><ul><li><a href="#auth-password-recovery-post"><span class="badge post"><i class="fa fa-plus"></i></span>Forgot Password</a></li><li><a href="#auth-password-recovery-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Reset Password</a></li></ul></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#users-api">Users API</a></div><div class="collapse-content"><ul><li><a href="#users-api-users-resource">Users resource</a><ul><li><a href="#users-api-users-resource-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>List users</a></li><li><a href="#users-api-users-resource-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create User</a></li><li><a href="#users-api-users-resource-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get single user</a></li><li><a href="#users-api-users-resource-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Update User</a></li><li><a href="#users-api-users-resource-patch"><span class="badge patch"><i class="fa fa-pencil"></i></span>Partial update User</a></li><li><a href="#users-api-users-resource-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Delete User</a></li></ul></li><li><a href="#users-api-roles-resource">Roles resource</a><ul><li><a href="#users-api-roles-resource-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>List roles</a></li><li><a href="#users-api-roles-resource-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create Role</a></li><li><a href="#users-api-roles-resource-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get single role</a></li><li><a href="#users-api-roles-resource-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Update Role</a></li><li><a href="#users-api-roles-resource-patch"><span class="badge patch"><i class="fa fa-pencil"></i></span>Partial update Role</a></li><li><a href="#users-api-roles-resource-delete"><span class="badge delete"><i class="fa fa-times"></i></span>Delete Role</a></li></ul></li><li><a href="#users-api-permissions-resource-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>List permissions</a></li><li><a href="#users-api-users-profile">Users profile</a><ul><li><a href="#users-api-users-profile-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get logged in user profile</a></li><li><a href="#users-api-users-profile-put"><span class="badge put"><i class="fa fa-pencil"></i></span>Full update logged in user profile</a></li><li><a href="#users-api-users-profile-patch"><span class="badge patch"><i class="fa fa-pencil"></i></span>Partial update logged in user profile</a></li><li><a href="#users-api-users-profile-put-1"><span class="badge put"><i class="fa fa-pencil"></i></span>Change logged in user password</a></li></ul></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#assets-api">Assets API</a></div><div class="collapse-content"><ul><li><a href="#assets-api-images-post"><span class="badge post"><i class="fa fa-plus"></i></span>Upload a file</a></li></ul></div></div><p style="text-align: center; word-wrap: break-word;"><a href="https://example.com">https://example.com</a></p></nav><div class="content"><div id="right-panel-background"></div><div class="middle"><header><h1 id="top">Laravel API</h1></header></div><div class="right"><h5>API Endpoint</h5><a href="https://example.com">https://example.com</a></div><div class="middle"><p>Welcome to the Starter Kit API, here you will find all the information related to the endpoints available.</p>
    <h2 id="header-authentication">Authentication <a class="permalink" href="#header-authentication" aria-hidden="true">¶</a></h2>
    <p>The API uses <a href="https://oauth.net/2/">oAuth2</a> for authentication, this means that all API calls should contain and authorization that looks like this</p>
    <pre><code><span class="hljs-attribute">Authorization</span>: <span class="hljs-string">Bearer API_KEY_HERE</span></code></pre>
    <p>Please see the Authentication documentation to know how to get an access token.</p>
    <h2 id="header-headers">Headers <a class="permalink" href="#header-headers" aria-hidden="true">¶</a></h2>
    <p>Make sure you have the following content type headers are set on every request:</p>
    <pre><code class="language-http"><span class="hljs-attribute">Accept</span>: <span class="hljs-string">application/json</span>
    <span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre>
    <h2 id="header-errors">Errors <a class="permalink" href="#header-errors" aria-hidden="true">¶</a></h2>
    <p>The API uses conventional HTTP response codes to indicate the success or failure of an API request. The table below contains a summary of the typical response codes:</p>
    <table>
    <thead>
    <tr>
    <th>Code</th>
    <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>200</td>
    <td>Everything is ok.</td>
    </tr>
    <tr>
    <td>400</td>
    <td>Valid data was given but the request has failed.</td>
    </tr>
    <tr>
    <td>401</td>
    <td>No valid API Key was given.</td>
    </tr>
    <tr>
    <td>404</td>
    <td>The request resource could not be found.</td>
    </tr>
    <tr>
    <td>405</td>
    <td>The method is not implemented</td>
    </tr>
    <tr>
    <td>413</td>
    <td>The Body is too large</td>
    </tr>
    <tr>
    <td>422</td>
    <td>The payload has missing required parameters or invalid data was given.</td>
    </tr>
    <tr>
    <td>429</td>
    <td>Too many attempts.</td>
    </tr>
    <tr>
    <td>500</td>
    <td>Request failed due to an internal error.</td>
    </tr>
    <tr>
    <td>503</td>
    <td>API is offline for maintenance.</td>
    </tr>
    </tbody>
    </table>
    </div><div class="middle"><section id="auth" class="resource-group"><h2 class="group-heading">Auth <a href="#auth" class="permalink">&para;</a></h2><p>The auth API will allow you to work with the users registration and password management.</p>
    </section></div><div class="middle"><div id="auth-tokens" class="resource"><h3 class="resource-heading">Tokens <a href="#auth-tokens" class="permalink">&para;</a></h3></div></div><div class="right"><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname">https://example.com</span>/oauth/token</span></div><div class="tabs"><div class="example-names"><span>Requests</span><span class="tab-button">example 1</span><span class="tab-button">example 2</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
      "<span class="hljs-attribute">grant_type</span>": <span class="hljs-value"><span class="hljs-string">"password"</span></span>,
      "<span class="hljs-attribute">client_id</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
      "<span class="hljs-attribute">client_secret</span>": <span class="hljs-value"><span class="hljs-string">"isudaiusyd87a6s87atsd8a7std"</span></span>,
      "<span class="hljs-attribute">username</span>": <span class="hljs-value"><span class="hljs-string">"jose@example.com"</span></span>,
      "<span class="hljs-attribute">password</span>": <span class="hljs-value"><span class="hljs-string">"Password123**"</span>
    </span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
      "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">grant_type</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The grant type to use"</span>
        </span>}</span>,
        "<span class="hljs-attribute">client_id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"the client id"</span>
        </span>}</span>,
        "<span class="hljs-attribute">client_secret</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The client secret"</span>
        </span>}</span>,
        "<span class="hljs-attribute">username</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The username for the user being authenticated"</span>
        </span>}</span>,
        "<span class="hljs-attribute">password</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The password for the user being authenticated"</span>
        </span>}
      </span>}</span>,
      "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
        <span class="hljs-string">"grant_type"</span>,
        <span class="hljs-string">"client_id"</span>,
        <span class="hljs-string">"client_secret"</span>,
        <span class="hljs-string">"username"</span>,
        <span class="hljs-string">"password"</span>
      ]
    </span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
      "<span class="hljs-attribute">token_type</span>": <span class="hljs-value"><span class="hljs-string">"Bearer"</span></span>,
      "<span class="hljs-attribute">expires_in</span>": <span class="hljs-value"><span class="hljs-string">"86400"</span></span>,
      "<span class="hljs-attribute">access_token: `eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDNjYTE2ZDNjZTEwYmIyZDZjYmQwYjE1ZjU0ZmY2NDhiODkxZGVlYzJmZGE4YTE3NGEzNjE3NzZlMDEzMzdmMDcyMDVjYzM2OGUzYzkwMjUiLCJpYXQiOiIxNjEwMjQ3NTUwLjkwMzEzMSIsIm5iZiI6IjE2MTAyNDc1NTAuOTAzMTM3IiwiZXhwIjoiMTYxMDMzMzk1MC41MTc3ODAiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YNlBKazrYQ0CSFmWIUFeOl7ODDC3Sw-fiQyZ1Behyl7-_9fp7akuhmvGXeOJCYQiS1</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span></span>,
      "<span class="hljs-attribute">refresh_token</span>": <span class="hljs-value"><span class="hljs-string">"def50200cd296202fa3d84fb5fedb48f09453ac34afafaa05446bab2b0d927821b9c79ba8239ef2c1825fdee70d03e9504d3e739ec8d5efcf79b5cae61dd081972105d75d196b16214087a80df5c1a2616bbff9c22b75077ca7cc2c9c1176cb3fe1404d3ae3e868e01989ef432521839912fe8ffd39a4048ced88f0c4cd52d01fa7c25166bdab9ab104a419705444bf3b316f00e4b0b1edcee80b0b1b6ec748a62a974089994f215abdc2a6b537f0ceb93dbe0f828bbd338d00f4583ec992bb1bee5fec646082e5a38a1f35ed1931ed3a05b7a0e261261e3e31430d134392ffe6b4a4dcd4e8247b4646ad64e42533ebe9357794d331f77566b3e1b236f27afd4b29d44c109997042d918c2243d43a49e3847b084989639e9b5765b8da62f67f497f3b0a965f7cb36a1fecb738370537c8be4d432a518cbe78a0ebc8704fdd0111afe1bd705f9b5b0257aeb88da6c681a88219940e5ac7b9b686dd57ad4b466ab57"</span>
    </span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
      "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">token_type</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The token type"</span>
        </span>}</span>,
        "<span class="hljs-attribute">expires_in</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"When the token expires"</span>
        </span>}</span>,
        "<span class="hljs-attribute">access_token: `eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDNjYTE2ZDNjZTEwYmIyZDZjYmQwYjE1ZjU0ZmY2NDhiODkxZGVlYzJmZGE4YTE3NGEzNjE3NzZlMDEzMzdmMDcyMDVjYzM2OGUzYzkwMjUiLCJpYXQiOiIxNjEwMjQ3NTUwLjkwMzEzMSIsIm5iZiI6IjE2MTAyNDc1NTAuOTAzMTM3IiwiZXhwIjoiMTYxMDMzMzk1MC41MTc3ODAiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YNlBKazrYQ0CSFmWIUFeOl7ODDC3Sw-fiQyZ1Behyl7-_9fp7akuhmvGXeOJCYQiS1</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"tsYbkckaauVRlgpfeMExcxe261-8WWEGU0HQDaHxrXcojWQr5LwsnCno_elxLsqoXRZXrKe8s70zs6wwKnqc8tZkrUDkpFt4bjHHtCF1M4xGxA8kNNFs_sqyN0P-amWt1gfuMaALWxgYeISpAAzfP6KgqWVmP3JqDWQAIMhh8NO2kEkfE6rgxQXp0zzvlvvZ7RSYc0sV8JrSnwa15z-q7-1oQ4XFqmYxv-90i_Jrf5N3gz-VON6ovt26Vh7qNeHKFkf98DwHiu5XF6cDHpiZBKwfjlFzG6-0ZPN1ROIXPt5Bk35xLlUUgB6f5kPHZMPfMTuWGneeTbFm_5igdyxwaBqEVfVnuFPnIv5oaKKbAQleyo-yt_LZe9qxFNx-LFlMHmDyAqdfKkra0HG6dCfxynV6x2RtRZHyicN6fDPekTMBs356vNlRRL1dEEzZ4Fbpft4TRZylyqarAXfGb7kCKCuuuHbO8LT6f2yk5JW3Ngc-gfb1dfTO0bfgtl0Rg6l8PWGStSnmyXqeNxLej0XKhrPuqft1JFtucUCw8gUjrcuqSmAAzvXBTbLLvb65WSTnl_tOFviaSeBF-zCJxkxD2uJ1b31YuKMkVd-9dpMs` (string) - The Access token"</span>
        </span>}</span>,
        "<span class="hljs-attribute">refresh_token</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Refresh token"</span>
        </span>}
      </span>}
    </span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
      "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
    </span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
      "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number"</span>
        </span>}
      </span>}
    </span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
      "<span class="hljs-attribute">grant_type: `social_grant`</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span></span>,
      "<span class="hljs-attribute">client_id</span>": <span class="hljs-value"><span class="hljs-string">"1"</span></span>,
      "<span class="hljs-attribute">client_secret</span>": <span class="hljs-value"><span class="hljs-string">"isudaiusyd87a6s87atsd8a7std"</span></span>,
      "<span class="hljs-attribute">provider</span>": <span class="hljs-value"><span class="hljs-string">"github"</span></span>,
      "<span class="hljs-attribute">token</span>": <span class="hljs-value"><span class="hljs-string">"sdoifu98a7sd87fytbs8d67ftnabs786dnta76std"</span>
    </span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
      "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">grant_type: `social_grant`</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The grant type to use"</span>
        </span>}</span>,
        "<span class="hljs-attribute">client_id</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"the client id"</span>
        </span>}</span>,
        "<span class="hljs-attribute">client_secret</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The client secret"</span>
        </span>}</span>,
        "<span class="hljs-attribute">provider</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The provider to use"</span>
        </span>}</span>,
        "<span class="hljs-attribute">token</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The token obtained by the provider"</span>
        </span>}
      </span>}</span>,
      "<span class="hljs-attribute">required</span>": <span class="hljs-value">[
        <span class="hljs-string">"grant_type: `social_grant`"</span>,
        <span class="hljs-string">"client_id"</span>,
        <span class="hljs-string">"client_secret"</span>,
        <span class="hljs-string">"provider"</span>,
        <span class="hljs-string">"token"</span>
      ]
    </span>}</code></pre><div style="height: 1px;"></div></div></div><div class="tabs"><div class="example-names"><span>Responses</span><span class="tab-button">200</span><span class="tab-button">401</span></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
      "<span class="hljs-attribute">token_type</span>": <span class="hljs-value"><span class="hljs-string">"Bearer"</span></span>,
      "<span class="hljs-attribute">expires_in</span>": <span class="hljs-value"><span class="hljs-string">"86400"</span></span>,
      "<span class="hljs-attribute">access_token: `eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDNjYTE2ZDNjZTEwYmIyZDZjYmQwYjE1ZjU0ZmY2NDhiODkxZGVlYzJmZGE4YTE3NGEzNjE3NzZlMDEzMzdmMDcyMDVjYzM2OGUzYzkwMjUiLCJpYXQiOiIxNjEwMjQ3NTUwLjkwMzEzMSIsIm5iZiI6IjE2MTAyNDc1NTAuOTAzMTM3IiwiZXhwIjoiMTYxMDMzMzk1MC41MTc3ODAiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YNlBKazrYQ0CSFmWIUFeOl7ODDC3Sw-fiQyZ1Behyl7-_9fp7akuhmvGXeOJCYQiS1</span>": <span class="hljs-value"><span class="hljs-string">"Hello, world!"</span></span>,
      "<span class="hljs-attribute">refresh_token</span>": <span class="hljs-value"><span class="hljs-string">"def50200cd296202fa3d84fb5fedb48f09453ac34afafaa05446bab2b0d927821b9c79ba8239ef2c1825fdee70d03e9504d3e739ec8d5efcf79b5cae61dd081972105d75d196b16214087a80df5c1a2616bbff9c22b75077ca7cc2c9c1176cb3fe1404d3ae3e868e01989ef432521839912fe8ffd39a4048ced88f0c4cd52d01fa7c25166bdab9ab104a419705444bf3b316f00e4b0b1edcee80b0b1b6ec748a62a974089994f215abdc2a6b537f0ceb93dbe0f828bbd338d00f4583ec992bb1bee5fec646082e5a38a1f35ed1931ed3a05b7a0e261261e3e31430d134392ffe6b4a4dcd4e8247b4646ad64e42533ebe9357794d331f77566b3e1b236f27afd4b29d44c109997042d918c2243d43a49e3847b084989639e9b5765b8da62f67f497f3b0a965f7cb36a1fecb738370537c8be4d432a518cbe78a0ebc8704fdd0111afe1bd705f9b5b0257aeb88da6c681a88219940e5ac7b9b686dd57ad4b466ab57"</span>
    </span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
      "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">token_type</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The token type"</span>
        </span>}</span>,
        "<span class="hljs-attribute">expires_in</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"When the token expires"</span>
        </span>}</span>,
        "<span class="hljs-attribute">access_token: `eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDNjYTE2ZDNjZTEwYmIyZDZjYmQwYjE1ZjU0ZmY2NDhiODkxZGVlYzJmZGE4YTE3NGEzNjE3NzZlMDEzMzdmMDcyMDVjYzM2OGUzYzkwMjUiLCJpYXQiOiIxNjEwMjQ3NTUwLjkwMzEzMSIsIm5iZiI6IjE2MTAyNDc1NTAuOTAzMTM3IiwiZXhwIjoiMTYxMDMzMzk1MC41MTc3ODAiLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.YNlBKazrYQ0CSFmWIUFeOl7ODDC3Sw-fiQyZ1Behyl7-_9fp7akuhmvGXeOJCYQiS1</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"tsYbkckaauVRlgpfeMExcxe261-8WWEGU0HQDaHxrXcojWQr5LwsnCno_elxLsqoXRZXrKe8s70zs6wwKnqc8tZkrUDkpFt4bjHHtCF1M4xGxA8kNNFs_sqyN0P-amWt1gfuMaALWxgYeISpAAzfP6KgqWVmP3JqDWQAIMhh8NO2kEkfE6rgxQXp0zzvlvvZ7RSYc0sV8JrSnwa15z-q7-1oQ4XFqmYxv-90i_Jrf5N3gz-VON6ovt26Vh7qNeHKFkf98DwHiu5XF6cDHpiZBKwfjlFzG6-0ZPN1ROIXPt5Bk35xLlUUgB6f5kPHZMPfMTuWGneeTbFm_5igdyxwaBqEVfVnuFPnIv5oaKKbAQleyo-yt_LZe9qxFNx-LFlMHmDyAqdfKkra0HG6dCfxynV6x2RtRZHyicN6fDPekTMBs356vNlRRL1dEEzZ4Fbpft4TRZylyqarAXfGb7kCKCuuuHbO8LT6f2yk5JW3Ngc-gfb1dfTO0bfgtl0Rg6l8PWGStSnmyXqeNxLej0XKhrPuqft1JFtucUCw8gUjrcuqSmAAzvXBTbLLvb65WSTnl_tOFviaSeBF-zCJxkxD2uJ1b31YuKMkVd-9dpMs` (string) - The Access token"</span>
        </span>}</span>,
        "<span class="hljs-attribute">refresh_token</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span></span>,
          "<span class="hljs-attribute">description</span>": <span class="hljs-value"><span class="hljs-string">"The Refresh token"</span>
        </span>}
      </span>}
    </span>}</code></pre><div style="height: 1px;"></div></div></div></div><div class="tab"><div><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"Unauthenticated."</span></span>,
      "<span class="hljs-attribute">status_code</span>": <span class="hljs-value"><span class="hljs-number">401</span>
    </span>}</code></pre><div style="height: 1px;"></div><h5>Schema</h5><pre><code>{
      "<span class="hljs-attribute">$schema</span>": <span class="hljs-value"><span class="hljs-string">"http://json-schema.org/draft-04/schema#"</span></span>,
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"object"</span></span>,
      "<span class="hljs-attribute">properties</span>": <span class="hljs-value">{
        "<span class="hljs-attribute">message</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"string"</span>
        </span>}</span>,
        "<span class="hljs-attribute">status_code</span>": <span class="hljs-value">{
          "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"number
