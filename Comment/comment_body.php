<?
class Comment {
                        static function onParserInit( Parser $parser ) {
                                $parser->setHook( 'comment', array( __CLASS__, 'commentRender'));
                                return true;
                        }
                        static function commentRender( $input, array $args, Parser $parser, PPFrame $frame ) {
                                $ret = '<div id="vanilla-comments">';
                                $ret .= '<p>We would love to hear your feedback, so please leave a Comment</p>';
                                $ret .= '<script type="text/javascript">';
                                $ret .= 'var vanilla_forum_url = \'http://<enter Community URL here>/\';';
                                $ret .= 'var vanilla_identifier = \'<define Unique Identifier>\';';
                                $ret .= 'var vanilla_category_id = \'<enter category id here>\';';
                                $ret .= '(function() {';
                                $ret .= 'var vanilla = document.createElement(\'script\');';
                                $ret .= 'vanilla.type = \'text/javascript\';';
                                $ret .= 'var timestamp = new Date().getTime();';
                                $ret .= 'vanilla.src = vanilla_forum_url + \'/js/embed.js\';';
                                $ret .= '(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(vanilla);';
                                $ret .= '})();';
                                $ret .= '</script>';
                                $ret .= '<noscript>Please enable JavaScript to view the <a href="http://vanillaforums.com/?ref_noscript">comments powered by Vanilla.</a></noscript>';
                                $ret .= '<div class="vanilla-credit"><a class="vanilla-anchor" href="http://vanillaforums.com">Comments by <span class="vanilla-logo">Vanilla</span></a></div>';
                                $ret .= '</div>';
                                return $ret;
                        }

}
