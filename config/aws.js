require('dotenv').config();

module.exports = {
  accessKeyId: process.env.AWS_ACCESS_KEY_ID || 'placeholder',
  secretAccessKey: process.env.AWS_SECRET_ACCESS_KEY || 'placeholder',
  region: process.env.AWS_REGION || 'placeholder',
  s3Bucket: process.env.S3_BUCKET || 'placeholder',
  cloudFrontDistributionId: process.env.CLOUDFRONT_DISTRIBUTION_ID || 'placeholder',
};
