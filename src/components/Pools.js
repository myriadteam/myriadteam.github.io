import React from 'react';
import '../styles/Pools.css';

const Pools = () => {
    return (
        <div className="pools__container">
            <h2 className="pools__header">Available Mining Pools</h2>

            <div className="p2pool__container">
                <div className="pool__subheaders"><strong>P2Pool Nodes:</strong></div>

                <div className="p2pool__boxes">
                    <div className="pools">
                        <div className="pool__type">Myr-Groestl: New Zealand</div>
                        <span>Pool URL:</span>
                        <div className="pool__cmd">nz.nutty.one:5545</div>    
                    </div>

                    <div className="pools">
                        <div className="pool__type">Skein: New Zealand</div>
                        <span>Pool URL:</span>
                        <div className="pool__cmd">nz.nutty.one:5589</div>  
                    </div>

                    <div className="pools">
                        <div className="pool__type">Yescrypt</div>
                        <span>Pool URL:</span>
                        <div className="pool__cmd">yescrypt.easymine.online:6000</div>  
                    </div>

                    <div className="pools">
                        <div className="pool__type">Run Your Own Node</div>
                        <span>Instructions:</span>
                        <div className="pool__cmd"><a href="https://github.com/nzsquirrell/p2pool-myriad" target="_blank" rel="noreferrer noopener">View P2POOL</a></div>  
                    </div>
                </div>
            </div>

            <div className="merge__container">
                <div className="pool__subheaders"><strong>Merge Mining Pools:</strong></div>

                <div className="merge__boxes">
                    <div className="pools">
                        <div className="pool__type">SHA256d: zpool</div>
                        <div className="pool__cmd"><a href="http://www.zpool.ca/" target="_blank" rel="noreferrer noopener">View Pool Details</a></div>    
                    </div>

                    <div className="pools">
                        <div className="pool__type">SHA256d: MultiPool</div>
                        <div className="pool__cmd"><a href="https://www.multipool.us/" target="_blank" rel="noreferrer noopener">View Pool Details</a></div>    
                    </div>

                    <div className="pools">
                        <div className="pool__type">Scrypt: zpool</div>
                        <div className="pool__cmd"><a href="http://www.zpool.ca/" target="_blank" rel="noreferrer noopener">View Pool Details</a></div>    
                    </div>
                </div>
            </div>

            <div className="other__container">
                <div className="pool__subheaders"><strong>Other Pools:</strong></div>

                <div className="other__boxes">
                    <div className="pools">
                        <div className="pool__type">Myr-Groestl: Miners-pool eu</div>
                        <div className="pool__cmd"><a href="https://www.miners-pool.eu/pools/myriadcoin-groestl" target="_blank" rel="noreferrer noopener">View Pool Details</a></div>    
                    </div>

                    <div className="pools">
                        <div className="pool__type">Myr-Groestl: Mining Pool Hub</div>
                        <div className="pool__cmd"><a href="https://myriadcoin-groestl.miningpoolhub.com/" target="_blank" rel="noreferrer noopener">View Pool Details</a></div>    
                    </div>

                    <div className="pools">
                        <div className="pool__type">Yescrypt: Miners-pool eu</div>
                        <div className="pool__cmd"><a href="https://www.miners-pool.eu/pools/myriadcoin-yescrypt" target="_blank" rel="noreferrer noopener">View Pool Details</a></div>    
                    </div>

                    <div className="pools">
                        <div className="pool__type">Yescrypt: Pokemongomongo.tk</div>
                        <div className="pool__cmd"><a href="http://pokemongomongo.tk/" target="_blank" rel="noreferrer noopener">View Pool Details</a></div>    
                    </div>

                    <div className="pools">
                        <div className="pool__type">Argon2d: Pokemongomongo.tk</div>
                        <div className="pool__cmd"><a href="http://pokemongomongo.tk/" target="_blank" rel="noreferrer noopener">View Pool Details</a></div>    
                    </div>

                    <div className="pools">
                        <div className="pool__type">SHA256d: Miningfield</div>
                        <span>Pool URL:</span>
                        <div className="pool__cmd">myrsha256.miningfield.com</div>  
                    </div>

                    <div className="pools">
                        <div className="pool__type">Yescrypt: Myriadcoin.tk</div>
                        <span>Pool URL:</span>
                        <div className="pool__cmd">myriadcoin.tk</div>  
                    </div>
                </div>
            </div>




        </div>
    )
}

export default Pools
