<section>
<article>
<h1><?php echo $osguide; ?> <span class="pull-right">Help</span></h1>
Coming soon ...
</article>

<article>
    <h2>Features</h2>
    SQLite 3 and Mysql compatible<br />
    100 Terminals by Simulator<br />
    Agents online counter<br />
    More coming ...
    <h3>Inworld:</h3>
    <a class="btn btn-default btn-success btn-xs" href="inc/destinations.php" target="_blank">
    <i class="glyphicon glyphicon-eye-open"></i> Demo</a>
</article>

<article>
    <h2>Requirment</h2>
    Mysql or Sqlite 3, Php5 with curl actived, Apache<br />
    Ossl enable
</article>

<article>
    <h2>Download</h2>
    <a class="btn btn-default btn-success btn-xs" href="https://github.com/djphil/osguide" target="_blank">
    <i class="glyphicon glyphicon-save"></i> GithHub</a> Source Code
</article>

<article>
    <h2>Install</h2>
    <h3>Robust.ini</h3>
    <pre>
    [LoginService]
    ; For V3 destination guide
    ; DestinationGuide = "${Const|BaseURL}/guide"
    DestinationGuide = "http://yourdomain.com/osguide/inc/destinations.php"
    </pre>
    <h3>OpenSim.ini</h3>
    <pre>
    [Network]
    ExternalHostNameForLSL = yourdomain.com
    OutboundDisallowForUserScripts = ""
    shard = "OpenSim"
    user_agent = "OpenSim LSL (Mozilla Compatible)"
    </pre>
    <h3>osslEnable.ini</h3>
    <pre>
    [XEngine]
    AllowOSFunctions = true 
    </pre>
    <p>And you should allow the following ossl functions to the parcel owner/manager</p>
    <pre>
    osKey2Name
    osGetGridName
    osGetMapTexture
    </pre>
</article>

<article id="AddRegion">
    <h2>Add Region</h2>
    Only the region/parcel owner is authorised to add a region/parcel to the OpenSim Destination Guide.
    <h3>Inword:</h3>
    <ol>
        <li>Download the OpenSim Destination Guide Terminal script (LSL).</li>
        <li>Copy the OpenSim Destination Guide Terminal script into a prim, configure and compile it.<br />
            (configurable variables: targetUrl, terminal_name, categorie_name, update_rate).
        </li>
        <li>Clic on the prim to update your region/parcel informations in the Opensim Destination Guide.</li>
    </ol>
    <a class="btn btn-default btn-success btn-xs" href="lsl/OpenSim Destination Guide Terminal v0.1.lsl" target="_blank">
    <i class="glyphicon glyphicon-save"></i> Download</a> OpenSim Destination Guide Terminal
</article>

<article id="RemoveRegion">
    <h2>Remove Region</h2>
    Only the region/parcel owner is authorised to remove a region/parcel from the OpenSim Destination Guide.
    <h3>Inworld:</h3>
    <ol>
        <li>Remove the OpenSim Destination Guide Terminal from your region/parcel.</li>
    </ol>
    <h3>Outworld:</h3>
    <ol>
        <li>Clic on the "update" button on your region/parcel details page on the OpenSim Destination Guide.</li>
    </ol>
</article>

<article>
    <h2>License</h2>
    GNU/GPL General Public License v3.0<br />
</article>

<article>
    <h2>Credit</h2>
    Philippe Lemaire (djphil)
</article>

<article>
    <h2>Donation</h2>
    <?php include_once("inc/paypal.php"); ?>
</article>

</section>
