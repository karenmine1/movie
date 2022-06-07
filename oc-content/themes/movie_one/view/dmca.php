<?php 
/**
 * The template for displaying page dmca
 *
 * @package www.ocimscripts.com
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'DMCA Notice';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
get_header(); ?>
<div class="col-md-8 col-sm-8 col-xs-12">

        <div class="panel panel-primary">

                <div class="panel-heading">
                        <h1 itemprop="title" class="title">DMCA Notice</h1>
                </div>

                <div itemprop="description" class="panel-body">

                        <p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site, you may notify our copyright agent, as set forth in the Digital Millennium Copyright Act of 1998 (DMCA). For your complaint to be valid under the DMCA, you must provide the following information when providing notice of the claimed copyright infringement:</p> 

                        <ul style="text-align: left;">
					<li>A physical or electronic signature of a person authorized to act on behalf of the copyright owner Identification of the copyrighted work claimed to have been infringed</li>
					<li>Identification of the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed</li>
					<li>Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address</li>
					<li>A statement that the complaining party "in good faith believes that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law"</li>
					<li>A statement that the "information in the notification is accurate", and "under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed"</li>
                        </ul>

                        <p>The above information must be submitted as a written, faxed or emailed notification to the following Designated Agent:</p>

                        <p><b>Disclaimer</b></p> 

                        <p>Though we strive to be completely accurate in the information that is presented on our site, and attempt to keep it as up to date as possible, in some cases, some of the information you find on the website may be slightly outdated. </p> 

                        <p><?php echo $hostname;?> reserves the right to make any modifications or corrections to the information you find on the website at any time without notice. </p> 

                        <p><b>Change to the Terms and Conditions of Use </b></p> 

                        <p>We reserve the right to make changes and to revise the above mentioned Terms and Conditions of use. </p>

                        <p>Attn: DMCA Office</p>
                        <p>Click Here : <a href="<?php echo view_page( 'contact' );?>">Contact Us</a></p>

                        <p>WE CAUTION YOU THAT UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO HEAVY CIVIL PENALTIES. THESE INCLUDE MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS´ FEES INCURRED BY US, BY ANY COPYRIGHT OWNER, OR BY ANY COPYRIGHT OWNER´S LICENSEE THAT IS INJURED AS A RESULT OF OUR RELYING UPON YOUR MISREPRESENTATION. YOU MAY ALSO BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY.</p>

                        <p>This information should not be construed as legal advice, for further details on the information required for valid DMCA notifications, see 17 U.S.C. 512(c)(3).</p>
                        <p>Last Revised: 13-09-2015</p> 
                </div>
        </div><!-- panel-body -->

</div><!-- .col-md-8 -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>