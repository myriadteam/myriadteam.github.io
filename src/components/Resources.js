import React from 'react';
import '../styles/Resources.css';
import bitcointalk from '../media/images/bitcointalk.png';
import discord from '../media/images/discord.png';
import facebook from '../media/images/facebook.png';
import myriad from '../media/images/myriad_logo.png';
import reddit from '../media/images/reddit.png';
import slack from '../media/images/slack.png';
import telegram from '../media/images/telegram.png';
import twitter from '../media/images/twitter.png';


const Resources = () => {
    return (
        <div id="resources" className="res__container">
            <div className="res__main">
                <h1>Resources</h1>
            </div>

            <div className="res__options">
                <div className="res__social">
                    <div className="res__header">Social</div>
                    <ul>
                        <li><a href="https://bitcointalk.org/index.php?topic=483515.0" target="_blank" rel="noreferrer noopener"><img className="res__icons" src={bitcointalk} alt="logo"/></a></li>
                        <li><a href="https://discordapp.com/invite/HVv3T4S" target="_blank" rel="noreferrer noopener"><img className="res__icons" src={discord} alt="logo"/></a></li>
                        <li><a href="https://www.facebook.com/themyriadplatform/" target="_blank" rel="noreferrer noopener"><img className="res__icons" src={facebook} alt="logo"/></a></li>
                        <li><a href="https://www.reddit.com/r/myriadcoin/" target="_blank" rel="noreferrer noopener"><img className="res__icons" src={reddit} alt="logo"/></a></li>
                        <li><a href="https://slack.myralicious.com/" target="_blank" rel="noreferrer noopener"><img className="res__icons" src={slack} alt="logo"/></a></li>
                        <li><a href="https://t.me/Myriadcoinofficial" target="_blank" rel="noreferrer noopener"><img className="res__icons" src={telegram} alt="logo"/></a></li>
                        <li><a href="https://twitter.com/myriadcoin" target="_blank" rel="noreferrer noopener"><img className="res__icons" src={twitter} alt="logo"/></a></li>
                    </ul>
                </div>

                <div className="res__info">
                    <div className="res__header">Information</div>
                    <ul>
                        <li><a href="https://github.com/myriadteam" target="_blank" rel="noreferrer noopener">Github</a></li>    
                        <li><a href="https://chainz.cryptoid.info/xmy/" target="_blank" rel="noreferrer noopener">Cryptoid Explorer</a></li>
                        <li><a href="https://blockbook.myralicious.com/" target="_blank" rel="noreferrer noopener">Myralicious Explorer</a></li>
                        <li><a href="https://cryptapus.org/myr/myrstat" target="_blank" rel="noreferrer noopener">Simple Statistics</a></li>
                        <li><a href="https://cryptapus.org/myr/minerstats/" target="_blank" rel="noreferrer noopener">Active Miners</a></li>
                    </ul>
                </div>

                <div className="res__info">
                    <div className="res__header">Other Resources</div>
                    <ul>
                        <li><a href="http://coinmarketcap.com/currencies/myriadcoin/" target="_blank" rel="noreferrer noopener">CoinMarketCap</a></li>    
                        <li><a href="https://www.reddit.com/r/myriadcoin/comments/47pww5/testnet_nodes_and_faucet/" target="_blank" rel="noreferrer noopener">Tesnet Information</a></li>
                        <li><a href="https://www.reddit.com/r/myrbot/wiki/index" target="_blank" rel="noreferrer noopener">IRC MYRBOT Information</a></li>
                        <li><a href="https://wordpress.org/plugins/nomiddleman-crypto-payments-for-woocommerce" target="_blank" rel="noreferrer noopener">WooCommerce Payment Plugin</a></li>
                    </ul>
                </div>

                <div className="res__logo">
                    <img src={myriad} alt="logo"/>
                    <div className="res__word">
                        <span id="textA">Myriad -</span> <span id="textB">A coin for everyone.</span>
                    </div>
                </div>
            </div>

            <div className="res__footer">
                &copy; 2021 Myriad
            </div>
        </div>
    )
}

export default Resources
