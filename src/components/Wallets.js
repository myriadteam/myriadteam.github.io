import React from 'react';
import Wallet from './Wallet';
import '../styles/Wallets.css';
import windows from '../media/images/windows.png';
import apple from '../media/images/apple.png';
import android from '../media/images/android.png';
import world from '../media/images/world.png';
import github from '../media/images/github.png';

const Wallets = () => {
    return (
        <div id="exchanges-wallets" className="wallet__container">
            <div className="wallet__header">Wallets</div>
            <div className="wallet__box">
                <Wallet name='Windows 32-Bit' message='Download' link='https://github.com/myriadteam/myriadcoin/releases/download/v0.16.4.1/myriadcoin-0.16.4.1-win32.zip' image={windows} alt='windows logo'/>
                <Wallet name='Windows 64-Bit' message='Download' link='https://github.com/myriadteam/myriadcoin/releases/download/v0.16.4.1/myriadcoin-0.16.4.1-win64.zip' image={windows} alt='windows logo'/>
                <Wallet name='COINiD' message='Google Play' link='https://play.google.com/store/apps/details?id=org.coinid.wallet.xmy&hl=en_US&gl=US' image={android} alt='android logo'/>
                <Wallet name='COINiD' message='App Store' link='https://apps.apple.com/us/app/myriad-wallet-for-coinid/id1434967792' image={apple} alt='apple logo'/>
                <Wallet name='macOS' message='Download' link='https://github.com/myriadteam/myriadcoin/releases/download/v0.16.4.1/myriadcoin-0.16.4.1-osx.dmg' image={apple} alt='apple logo'/>
                <Wallet name='JSWallet' message='Visit Web Wallet' link='https://jswallet.github.io/' image={world} alt='globe'/>
                <Wallet name='Other Builds' message='Visit GitHub' link='https://github.com/myriadteam/myriadcoin/releases/tag/v0.16.4.1' image={github} alt='github logo'/>
            </div>
        </div>
    )
}

export default Wallets
