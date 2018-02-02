//
//  BlogViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 20.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit
import CoreData

class BlogViewController: UIViewController,UITableViewDataSource,UITableViewDelegate {
    @IBOutlet weak var blogTableView: UITableView!
    
    var Blogs:[Blog] = []
    var person:String = ""
    var appDelegate: AppDelegate?
    var managedObjectContext: NSManagedObjectContext?
    @IBOutlet weak var backImage: UIImageView!
    override func viewDidLoad() {
        super.viewDidLoad()
        backImage.image = UIImage(named: "back")
        let lightBlur = UIBlurEffect(style: UIBlurEffectStyle.Light)
        let blurView = UIVisualEffectView(effect: lightBlur)
        blurView.frame = backImage.bounds
        backImage.addSubview(blurView)
        appDelegate = UIApplication.sharedApplication().delegate as? AppDelegate
        managedObjectContext = appDelegate?.managedObjectContext

        // Do any additional setup after loading the view.
    }
    
    override func preferredStatusBarStyle() -> UIStatusBarStyle {
        
        //LightContent
        return UIStatusBarStyle.LightContent
        
        //Default
        //return UIStatusBarStyle.Default
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    func tableView(tableView: UITableView, canEditRowAtIndexPath indexPath: NSIndexPath) -> Bool {
        return true
    }
    func getPeople( animation: UITableViewRowAnimation? = nil) {
        let fetchRequest = NSFetchRequest(entityName: "Blog")
        
        do {
            if let results = try managedObjectContext?.executeFetchRequest(fetchRequest) as? [Blog] {
                if Blogs != results {
                    Blogs = results
                    blogTableView.reloadData()
                }
            }
        } catch {
            print(error)
        }
    }
    
    func tableView(tableView: UITableView, cellForRowAtIndexPath indexPath: NSIndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCellWithIdentifier("cell", forIndexPath: indexPath) as! BlogTableViewCell
        cell.titleInCell?.text = Blogs[indexPath.row].title
        cell.textInCell?.text = Blogs[indexPath.row].text
        cell.authorInCell?.text = "By \(Blogs[indexPath.row].author!)"
        cell.typeInCell?.text = Blogs[indexPath.row].date
        return cell
    }
    
    func numberOfSectionsInTableView(tableView: UITableView) -> Int {
        return 1
    }
    
    func tableView(tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return Blogs.count
    }

    override func viewWillAppear(animated: Bool) {
        super.viewWillAppear(animated)
        getPeople()
        if let indexPath = blogTableView.indexPathForSelectedRow {
            blogTableView.deselectRowAtIndexPath(indexPath, animated: true)
        }
    }
    
    func tableView(tableView: UITableView, commitEditingStyle editingStyle: UITableViewCellEditingStyle, forRowAtIndexPath indexPath: NSIndexPath) {
        if person==Blogs[indexPath.row].author{
            if editingStyle == .Delete {
            let person = Blogs[indexPath.row]
            managedObjectContext?.deleteObject(person)
            do {
                try managedObjectContext?.save()
            } catch {
                print(error)
            }
            blogTableView.beginUpdates()
            Blogs.removeAtIndex(indexPath.row)
            blogTableView.deleteRowsAtIndexPaths([indexPath], withRowAnimation: UITableViewRowAnimation.Left)
            blogTableView.endUpdates()
            getPeople()
            }   
        }
    }
    
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        if segue.identifier == "blogDetailSegue"{
            if let indexPath = blogTableView.indexPathForSelectedRow{
                let destNav = segue.destinationViewController as! UINavigationController
                let dest = destNav.topViewController as! BlogDetailViewController
                dest.authorForSegue = Blogs[indexPath.row].author!
                dest.dateForSegue = Blogs[indexPath.row].date!
                dest.textForSegue = Blogs[indexPath.row].text!
                dest.titleForSegue = Blogs[indexPath.row].title!
            }
        }
    }
    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
