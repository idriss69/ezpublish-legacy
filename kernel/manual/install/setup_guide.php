<h1>eZ publish installation using the setup gude</h1>

<ul>

</ul>

<h2 id="Requirements"> eZ publish 3 requirements</h2>
<p>
	You need to have Apache, MySQL, ImageMagick and PHP installed to run eZ publish 3.
	PHP needs to have compiled-in support for either MySQL or PostgreSQL.
	For image conversion support you need to have GD compiled in PHP or
	ImageMagick installed on your system.
</p>

<ul>
	<li>PHP >= 4.1.x <br /><a href="http://www.php.net">http://www.php.net </a> </li>
	<li>Apache 1.3 (apache 2.0 might/might not work) <br /><a href="http://www.apache.org">http://www.apache.org</a></li>
	<li>Either MySQL or PostgreSQL <br /><a href="http://www.mysql.org">http://www.mysql.org</a><br /><a href="http://www.postgresql.org">http://www.postgresql.org</a></li>
	<li> ImageMagick and/or GD compiled in PHP for image conversion (not required) <br /><a href="http://www.imagemagick.org">http://www.imagemagick.org</a></li>
</ul>

<p>
	The installation process for the above programs are very well documented on
	their homepage, so we will not include that here.
</p>

<h2 id="Linux_FreeBSD_Macos">Using the setup guide on Linux, FreeBSD and Mac OS X</h2>

<h4>MySQL</h4>
<p>
	We need to login, create a new database, grant permissions to a user and insert a database.
</p>

<ol>
	<li><pre class="example"> $ mysql -u root -p &lt;password&gt;</pre></li>
	<li>You should now have a "mysql&gt;" prompt, create a new database <pre class="example"> mysqlgt&; create database &lt;name_of_database&gt;</pre></li>
	<li>Grant permissions <pre class="example"> mysql&gt; grant all on &lt;name_of_database&gt;.* to &lt;user&gt;@localhost
	identified by '&lt;password&gt;';</pre></li>
	<li>If you don't want to install demodata <pre class="example"> $ mysql -u &lt;user&gt; -p&lt;password&gt; &lt;name_of_database&gt;
	&lt; &lt;httproot&gt;/ezpublish-xxx/kernel/sql/mysql/kernel_clean.sql</pre>
	If you do want the demodata <pre class="example"> $ mysql -u &lt;user&gt; -p&lt;password&gt; &lt;name_of_database&gt;
	&lt; &lt;httproot&gt;/ezpublish-xxx/kernel/sql/mysql/demokernel.sql </pre></li>
</ol>


<h4 id="">PosgreSQL</h4>
<p>
	We need to login, create a new database, grant permissions to a user and insert a database.
</p>

<ol>
	<li>Become the PostgreSQL super user (normally called postgres)<pre class="example">$ su &lt;postgres_super_user&gt;</pre></li>
	li>Create a postgresql user<pre class="example">$ createuser &lt;user&gt;</pre></li>
	<li>Create a database <pre class="example">$ createdb &lt;name_of_database&gt;</pre></li>
	<li>Demodata is not available for PostgreSQL at the moment, so we have to install the kernel_clean.sql file<pre class="example">$ psql -U &lt;ezpublish_user&gt;  &lt;name_of_database&gt;
	&lt; &lt;httproot&gt;/ezpublish-xxx/kernel/sql/postgresql/kernel_clean.sql</pre></li>
</ol>

<ol>
	<li>Make sure you have met the eZ publish requirements</li>
	<li>Go to <a href="http://ez.no/download">http://ez.no/download</a> and download the latest release of eZ publish</li>
	<li>Extract the downloaded eZ pulish file somewhere on Apache's DocumenRoot <pre class="example"> $ tar xvfz ezpublish-xxx.tar.gz -C Apache_document_root</pre> and rename it something nice like 'ezpublish'</li>

	<li>Open a browser and point it to the server where you extracted ezpublish with the correct url</li>
	<li>Follow the setup guide instructions</li>
</ol>

<h2 id="Windows">Using the setup guide on Windows</h2>
<ol>
	<li>Make sure you have met the eZ publish requirements</li>
	<li>Go to <a href="http://ez.no/download">http://ez.no/download</a> and download the latest release of eZ publish</li>
	<li>Extract the downloaded eZ pulish file somewhere on Apache's DocumenRoot</li>
	<li>Open a browser and point it to the server where you extracted ezpublish</li>
	<li>Follow the setup guide instructions</li>
</ol>

<p class="important"> <b>Note:</b>The setup guide creates a new settings/site.ini.php which overrides the default settings/site.ini</p>
