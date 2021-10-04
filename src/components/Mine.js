import React from 'react';
import '../styles/Mine.css';

const Mine = () => {
    return (
        <div id="mine" className="mine__container">
            <h1 className="mine__header">Mine</h1>

            <div className="mine__intro">
                <div className="intro">
                    <span className="intro__title">Getting Started</span> 
                    <br/>
                    To mine Myriad, you'll need to first download a wallet. Then, one of the listed mining softwares and fire away! If you need a little help, you can watch this YouTube tutorial.
                </div>
                <div className="intro">
                    <span className="intro__title">Mining Software</span> 
                    <br/>
                    Myriad supports a handful of different mining softwares. You can choose from the list below for what algorithm you want to mine with depending on how your mining rig or device is setup.
                </div>
                <div className="intro">
                    <span className="intro__title">Mining Pools</span>
                    <br/>
                    You can mine Myriad through a number of pools. If you don't know what a mining pool is, you can learn more here. We've listed the pools that currently support mining and merge mining of Myriad below.
                </div>
            </div>

            <h2 className="mine__subheader">Available Mining Software</h2>

            <div className="mine__box1">
                <div>
                    <span className="sub__titles">SHA256d</span>
                    <p>You may use any SHA256d compatible ASIC</p>
                </div>
                
                <div>
                    <span className="sub__titles">Scrypt</span>
                    <p>You may use any Scrypt compatible ASIC</p>
                </div>
            </div>

            <div className="mine__box2">
                <div className="box2__header">
                    <span className="sub__titles">Myr-Groestl</span>
                    <p>If you mine using Myr-Groestl, you have three options:</p>
                </div>

                <div className="box2__container">
                    <div className="box2__subboxes"> 
                        <span>sgminer for OpenCL GPU mining</span>
                        <div className="box2__links"><a href="https://bitcointalk.org/index.php?topic=632503.0" target="_blank" rel="noreferrer noopener">BITCOINTALK Thread</a></div>
                        <div className="box2__links"><a href="https://www.nicehash.com/index.jsp?p=software#amdgpu" target="_blank" rel="noreferrer noopener">Windows Binaries</a></div>
                        <div className="box2__links"><a href="https://github.com/sgminer-dev/sgminer" target="_blank" rel="noreferrer noopener">GitHub Source</a></div>
                        <span>Suggested Command Line:</span>
                        <div className="cmd__sub">
                            sgminer --algorithm myriadcoin-groestl --no-extranonce -o (pool-URL) -O Username:Password
                        </div>
                    </div>

                    <div className="box2__subboxes"> 
                        <span>ccminer for CUDA GPU mining</span>
                        <div className="box2__links"><a href="https://bitcointalk.org/?topic=770064" target="_blank" rel="noreferrer noopener">BITCOINTALK Thread</a></div>
                        <div className="box2__links"><a href="https://github.com/tpruvot/ccminer/releases/latest" target="_blank" rel="noreferrer noopener">Windows Binaries</a></div>
                        <div className="box2__links"><a href="https://github.com/tpruvot/ccminer" target="_blank" rel="noreferrer noopener">GitHub Source</a></div>
                        <span>Suggested Command Line:</span>
                        <div className="cmd__sub">
                            ccminer -a myr-gr -o (pool-URL) -O Username:Password
                        </div>
                    </div>

                    <div className="box2__subboxes"> 
                        <span>cpuminer-multi for CPU mining</span>
                        <div className="box2__links"><a href="https://bitcointalk.org/?topic=841401" target="_blank" rel="noreferrer noopener">BITCOINTALK Thread</a></div>
                        <div className="box2__links"><a href="https://github.com/tpruvot/cpuminer-multi/releases/latest" target="_blank" rel="noreferrer noopener">Windows Binaries</a></div>
                        <div className="box2__links"><a href="https://github.com/tpruvot/cpuminer-multi" target="_blank" rel="noreferrer noopener">GitHub Source</a></div>
                        <span>Suggested Command Line:</span>
                        <div className="cmd__sub">
                            cpuminer -a myr-gr -o (pool-URL) -O Username:Password
                        </div>
                    </div>
                </div>
            </div>

            <div className="mine__box3">
                <div className="box2__subboxes"> 
                    <span className="sub__titles">Argon2D</span>
                    <span>CPUMiner-opt</span>
                    <div className="box2__links"><a href="https://github.com/JayDDee/cpuminer-opt/releases" target="_blank" rel="noreferrer noopener">CPUMINER-OPT ON GITHUB</a></div>
                    <span>Suggested Command Line:</span>
                    <div className="cmd__sub">
                        cpuminer -a argon2d4096 -o (pool-URL) -u username -p password
                    </div>
                </div>

                <div className="box2__subboxes"> 
                    <span className="sub__titles">Yescrypt</span>
                    <span>CPUMiner Multi Optimized</span>
                    <div className="box2__links"><a href="https://bitcointalk.org/index.php?topic=1326803.0" target="_blank" rel="noreferrer noopener">BITCOINTALK Thread</a></div>
                    <span>Suggested Command Line:</span>
                    <div className="cmd__sub">
                        cpuminer -a yescrypt -o (pool-URL) -u username -p password
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Mine
