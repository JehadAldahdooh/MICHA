
<!doctype html>
<html>
  <head>
    <title>MICHA API</title>
    <style type="text/css">
      body {
	font-family: Trebuchet MS, sans-serif;
	font-size: 15px;
	color: #444;
	margin-right: 24px;
}

h1	{
	font-size: 25px;
}
h2	{
	font-size: 20px;
}
h3	{
	font-size: 16px;
	font-weight: bold;
}
hr	{
	height: 1px;
	border: 0;
	color: #ddd;
	background-color: #ddd;
}

.app-desc {
  clear: both;
  margin-left: 20px;
}
.param-name {
  width: 100%;
}
.license-info {
  margin-left: 20px;
}

.license-url {
  margin-left: 20px;
}

.model {
  margin: 0 0 0px 20px;
}

.method {
  margin-left: 20px;
}

.method-notes	{
	margin: 10px 0 20px 0;
	font-size: 90%;
	color: #555;
}

pre {
  padding: 10px;
  margin-bottom: 2px;
}

.http-method {
 text-transform: uppercase;
}

pre.get {
  background-color: #0f6ab4;
}

pre.post {
  background-color: #10a54a;
}

pre.put {
  background-color: #c5862b;
}

pre.delete {
  background-color: #a41e22;
}

.huge	{
	color: #fff;
}

pre.example {
  background-color: #f3f3f3;
  padding: 10px;
  border: 1px solid #ddd;
}

code {
  white-space: pre;
}

.nickname {
  font-weight: bold;
}

.method-path {
  font-size: 1.5em;
  background-color: #0f6ab4;
}

.up {
  float:right;
}

.parameter {
  width: 500px;
}

.param {
  width: 500px;
  padding: 10px 0 0 20px;
  font-weight: bold;
}

.param-desc {
  width: 700px;
  padding: 0 0 0 20px;
  color: #777;
}

.param-type {
  font-style: italic;
}

.param-enum-header {
width: 700px;
padding: 0 0 0 60px;
color: #777;
font-weight: bold;
}

.param-enum {
width: 700px;
padding: 0 0 0 80px;
color: #777;
font-style: italic;
}

.field-label {
  padding: 0;
  margin: 0;
  clear: both;
}

.field-items	{
	padding: 0 0 15px 0;
	margin-bottom: 15px;
}

.return-type {
  clear: both;
  padding-bottom: 10px;
}

.param-header {
  font-weight: bold;
}

.method-tags {
  text-align: right;
}

.method-tag {
  background: none repeat scroll 0% 0% #24A600;
  border-radius: 3px;
  padding: 2px 10px;
  margin: 2px;
  color: #FFF;
  display: inline-block;
  text-decoration: none;
}

    </style>
  </head>
 <body>
    <h1>MICHA API</h1>
    <div class="app-desc">More information: <a href="https://micha-protocol.org/about/">https://micha-protocol.org/about/</a></div>
    <div class="app-desc">Contact Info: <a href="https://www.helsinki.fi/en/researchgroups/network-pharmacology-for-precision-medicine">
	 NETWORK PHARMACOLOGY FOR PRECISION MEDICINE 
    </a></div>
    <div class="app-desc">Version: 1.0.0</div>
    <div class="app-desc">BasePath:/api</div>
    <div class="app-desc">license:</div>
    <div class="license-info">Apache 2.0</div>
    <div class="license-url">http://www.apache.org/licenses/LICENSE-2.0.html</div>
    <h3>Table of Contents </h3>
    <div class="method-summary"></div>
    <!-- <h4><a href="#Targets">Targets</a></h4>
	<ul>
	<li><a href="#getPetById"><code><span class="http-method">get</span> /get_targets/{inchiKey}</code></a></li>
	</ul>-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	    <h1><a name="Targets">Annotations</a></h1>
    <div class="app-desc">
        <p>
            This API endpoint will return annotations for fairified drug screening protocols in MICHA. Input will be standard inchikey and API will return tested cell-lines and experimental settings for input compound (if any)
			
			e.g. <a href="https://micha-protocol.org/micha_api/annotations/XGALLCVXEZPNRQ-UHFFFAOYSA-N">https://micha-protocol.org/micha_api/annotations/XGALLCVXEZPNRQ-UHFFFAOYSA-N</a>
        </p>
    </div>

    <div class="method"><a name="getPetById" />
        <div class="method-path">
            <!--<a class="up" href="#__Methods">Up</a>-->
            <pre class="get"><code class="huge"><span class="http-method">get</span> /annotations/{inchiKey}</code></pre></div>
        <div class="method-summary">Find drug screening annotations by inchikey </div>
        <div class="method-notes"></div>

        <h3 class="field-label">Path parameters</h3>
        <div class="field-items">
            <div class="param">inchiKey (required)</div>

            <div class="param-desc"><span class="param-type">Path Parameter</span> &mdash; targets to be returned </div>
        </div>
        <!-- field-items -->

        <!--Todo: process Response Object and its headers, schema, examples -->

        <h3 class="field-label">Produces</h3> This API call produces the following media types according to the <span class="header">Accept</span> request header; the media type will be conveyed by the <span class="header">Content-Type</span> response header.
        <ul>
            <li><code>application/json</code></li>
        </ul>
        <a href="#"></a>
    </div>
    <!-- method -->
    <hr/>
	
	
    <h1><a name="Targets">Drug targets</a></h1>

    <div class="app-desc">
        <p>
            MICHA is a protocol for the annotation and reporting of Chemosensitivity assays by FAIRifying drug sensitivity screening data. It can provide publicly available information for the compounds such as primary targets, other potent targets, clinical phase and physicochemical properties by inputting standard_inchiKey (either through MICHA website (https://micha-protocol.org/micha_api) or programmatically 
			by using API (e.g. <a href="https://micha-protocol.org/micha_api/get_targets/XGALLCVXEZPNRQ-UHFFFAOYSA-N">https://micha-protocol.org/micha_api/get_targets/XGALLCVXEZPNRQ-UHFFFAOYSA-N</a>).
        </p>
    </div>

    <div class="method"><a name="getPetById" />
        <div class="method-path">
            <!--<a class="up" href="#__Methods">Up</a>-->
            <pre class="get"><code class="huge"><span class="http-method">get</span> /get_targets/{inchiKey}</code></pre></div>
        <div class="method-summary">Find targets by inchikey </div>
        <div class="method-notes"></div>

        <h3 class="field-label">Path parameters</h3>
        <div class="field-items">
            <div class="param">inchiKey (required)</div>
            <div class="param-desc"><span class="param-type">Path Parameter</span> &mdash; targets to be returned </div>
        </div>
        <!-- field-items -->
        <!--Todo: process Response Object and its headers, schema, examples -->
        <h3 class="field-label">Produces</h3> This API call produces the following media types according to the <span class="header">Accept</span> request header; the media type will be conveyed by the <span class="header">Content-Type</span> response header.
        <ul>
            <li><code>application/json</code></li>
        </ul>

        <h3 class="field-label">Responses</h3>
        <h4 class="field-label">200</h4> successful operation
        <a href="#"></a>
        <h4 class="field-label">400</h4> Invalid ID supplied
        <a href="#"></a>
        <h4 class="field-label">404</h4> not found
        <a href="#"></a>
    </div>
    <!-- method -->
    <hr/>



    <h3>Table of Contents</h3>
    <ol>
    </ol>

</body>

</html>