import React from 'react';
import '../styles/Exchanges.css';
import bittrex from '../media/images/bittrex.png';
import doveWallet from '../media/images/doveWallet.png';

const Exchanges = () => {
    return (
        <div id="exchanges-wallets" className="exch__container">
            <h1 className="exch__header">Exchanges</h1>

            <div className="exch__links">
                <a href="https://bittrex.com/Market/Index?MarketName=BTC-XMY" rel="noreferrer noopener" target="_blank"> <img className="exch__logo" src={bittrex} alt="Bittrex" /> </a>
                <a href="https://dovewallet.com/trade/spot/xmy-btc" rel="noreferrer noopener" target="_blank"> <img className="exch__logo" src={doveWallet} alt="Dove Wallet" /> </a>
            </div>
        </div>
    )
}

export default Exchanges
