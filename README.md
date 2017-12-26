# Myriad Website 2.0

This is a completed proposition for an update to the current myriadcoin.org website. This is a completed site and ready for use.

## Testing Locally

You can quickly get a local server running for testing and developing using the following commands.

**You'll need to have the latest version of Node.JS installed.** Node.JS will not be required in whatever environment the outputted build files run in. The site is entirely static and does not depend on any backend.

**You'll also need to have the latest version of Bower installed.** Bower is also not required in production, only for building.

```
npm install
bower install
npm run dev
```

## Deploying

This is setup to run on AWS' services, but you can host it anywhere. If you want to host the static files yourself, you can simply build from `src` and upload the generated `build` directory to wherever you're hosting.

To generate the build directory, simple run

```
npm run build
```

If you want to deploy to AWS' S3 & CloudFront, you'll need to setup an S3 bucket and CloudFront distribution pointing to it.

After setting up an S3 bucket and distribution, you'll also need to create an IAM role and get an AWS Access Key ID & AWS Secret Access Key that has permission to modify your S3 bucket and CloudFront distribution.

You'll then need to modify the .env file in the root directory. It looks something like this

```
#########################
# ENVIRONMENT VARIABLES #
#########################
# Environment variables #
# that have been set    #
# already will take     #
# priority over what is #
# set here.             #
#########################

AWS_ACCESS_KEY_ID={The AWS Access Key ID}
AWS_SECRET_ACCESS_KEY={The AWS Secret Access Key}
AWS_REGION={The AWS Region you're using}
S3_BUCKET={The name of your S3 bucket}
CLOUDFRONT_DISTRIBUTION_ID={The ID of the CloudFront distribution you created}
```

## Questions

If you have any questions, please submit a new issue.
