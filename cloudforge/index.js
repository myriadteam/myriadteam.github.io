const CloudForge = require('cloudforge');
const awsConfig = require('../config/aws');

// Directories are relative to root, as cloudforge is used from npm runnable commands.
module.exports = new CloudForge({
  awsAccessKeyId: awsConfig.accessKeyId,
  awsSecretAccessKey: awsConfig.secretAccessKey,
  awsS3Bucket: awsConfig.s3Bucket,
  awsCloudFrontDistributionId: awsConfig.cloudFrontDistributionId,
  deployDirectory: './build',
  server: {
    directory: './build',
    browser: 'Google Chrome',
    port: 8686,
  },
  html: {
    sourceDirectory: './src/views',
    buildDirectory: './build',
  },
  sass: {
    sourceDirectory: './src/sass',
    buildDirectory: './build/css',
    includeSourceMap: true,
    outputStyle: 'nested',
  },
  dependencies: [
    ['./src/images', './build/images'],
    ['./src/javascript', './build/javascript'],
    ['./src/dependencies', './build/dependencies'],
    ['./src/dependencies/flag-icon-css/flags', './build/flags'],
  ],
});
